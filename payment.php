<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "camping_cut";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the selected payment method
    if (isset($_POST['payment_method'])) {
        $payment_method = $_POST['payment_method'];
        
        // Process the selected payment method
        switch ($payment_method) {
            case 'COD':
                // Directly place the order as Cash on Delivery
                placeOrder('Cash on Delivery');
                break;
            case 'Internet Banking':
                // Redirect to Internet Banking gateway
                header("Location: internet-banking.php");
                exit;
            case 'Debit / Credit card':
                // Redirect to Credit Card payment gateway
                header("Location: credit-card.php");
                exit;
            default:
                echo "Invalid payment method selected.";
        }
    } else {
        echo "Please select a payment method.";
    }
}

// Function to place the order in the database
function placeOrder($payment_method) {
    global $con;

    // Retrieve products in cart
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT p.id, p.name, p.price, c.quantity FROM products p JOIN carts c ON p.id = c.product_id WHERE c.user_id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Initialize total price and prepare data for order insertion
    $total_price = 0;
    $order_details = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $product_id = $row['id'];
            $product_name = $row['name'];
            $price = $row['price'];
            $quantity = $row['quantity'];
            $total_per_item = $price * $quantity;

            // Calculate total price
            $total_price += $total_per_item;

            // Collect order details for insertion
            $order_details[] = [
                'product_id' => $product_id,
                'price' => $price,
                'quantity' => $quantity,
                'total_per_item' => $total_per_item
            ];
        }
    }

    // Insert order into orders table
    if (!empty($order_details)) {
        $order_date = date('Y-m-d H:i:s');
        $order_status = 'Pending'; // Example: Initial order status
        $insert_order_sql = "INSERT INTO orders (order_date, total_price, paymentMethod, orderStatus, user_id) VALUES (?, ?, ?, ?, ?)";
        $stmt = $con->prepare($insert_order_sql);
        $stmt->bind_param("sissi", $order_date, $total_price, $payment_method, $order_status, $user_id);

        if ($stmt->execute()) {
            $order_id = $stmt->insert_id;
            $stmt->close();

            // Insert order details into order_items table
            $insert_order_items_sql = "INSERT INTO order_items (order_id, product_id, price, quantity) VALUES (?, ?, ?, ?)";
            $stmt_items = $con->prepare($insert_order_items_sql);

            foreach ($order_details as $item) {
                $stmt_items->bind_param("iidi", $order_id, $item['product_id'], $item['price'], $item['quantity']);
                $stmt_items->execute();
            }

            $stmt_items->close();

            // Clear cart after placing order
            $clear_cart_sql = "DELETE FROM carts WHERE user_id = ?";
            $stmt_clear_cart = $con->prepare($clear_cart_sql);
            $stmt_clear_cart->bind_param("i", $user_id);
            if ($stmt_clear_cart->execute()) {
                echo "Order placed successfully. Your order ID is: " . $order_id;
            } else {
                echo "Error clearing cart: " . $con->error;
            }
            $stmt_clear_cart->close();
        } else {
            echo "Error placing order: " . $stmt->error;
        }
    } else {
        echo "No items in the cart.";
    }
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Payment Method</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            background-color: #f9f9f9;
        }
        .payment-method {
            max-width: 400px;
            margin: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .payment-method h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
            text-align: center;
        }
        .payment-options {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .payment-options label {
            display: block;
            cursor: pointer;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .payment-options label:hover {
            background-color: #f2f2f2;
        }
        .payment-options input[type="submit"] {
            margin-top: 20px;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .payment-options input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="payment-method">
        <h2>Choose Payment Method</h2>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="payment-options">
                <label>
                    <input type="radio" name="payment_method" value="COD" required>
                    Cash on Delivery
                </label>
                <label>
                    <input type="radio" name="payment_method" value="Internet Banking" required>
                    Internet Banking
                </label>
                <label>
                    <input type="radio" name="payment_method" value="Debit / Credit card" required>
                    Debit / Credit card
                </label>
            </div>

            <input type="submit" value="Proceed to Payment">
        </form>
    </div>
</body>
</html>
