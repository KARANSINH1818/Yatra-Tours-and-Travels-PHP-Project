<?php
include "connection.php";

// Retrieve form data
$u_id = $_POST['u_id'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$status = $_POST['status'];
$b_id = $_POST['b_id'];

// Calculate cost based on room rate and stay duration
$query = "SELECT tours_price FROM tours WHERE tours_id='$b_id'";
$result = mysqli_query($con, $query);

if ($row = mysqli_fetch_assoc($result)) {
    $monthly_book = $row['tours_price'];
    // Convert monthly rent to daily rent
    $per_day_book = $monthly_book / 30; // Assuming 30 days in a month

    // Calculate the number of days between start and end dates
    $start = new DateTime($start_date);
    $end = new DateTime($end_date);
    $interval = $start->diff($end);
    $days = $interval->days;

    // Calculate the total cost
    $total_cost = $days * $per_day_book;

    // Insert booking details into the bookings table
    $q = "INSERT INTO booking ( u_id, start_date, end_date, status,t_amount) 
          VALUES ('$u_id','$start_date', '$end_date', '$status','$per_day_book')";

    if (mysqli_query($con, $q))
     {
        echo "Booking successful!";
    } else {
        echo "Fail: " . mysqli_error($con);
    }
} else {
    echo "Room details not found.";
}
?>