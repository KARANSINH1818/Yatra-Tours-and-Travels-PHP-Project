<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Camping a Travel Category Bootstrap Responsive Template | Home :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Camping Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //Fonts -->

</head>

<body>
    <!-- mian-content -->
    <div class="main-content" id="home">
     

        <!-- banner -->
        <section class="banner">
            <div class="container">
                <div class="row banner-grids">
                    <div class="col-lg-6 banner-info-w3ls">
                        <h2>Enjoy Your Holiday Trip
                        </h2>
                        <h3 class="mb-3">Plan Your Holiday Trip Now Exceptional Adventure</h3>
                        <p class="mb-4"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. </p>
                        <a href="about.php" class="btn">Read More</a>
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- //banner -->
    </div>

    <div class="container mt-3">
        <a href="index.php" class="btn btn-success">Back to Home</a>
    </div>
    
    <div class="container mt-7">
    <?php
    $con = mysqli_connect("localhost", "root", "", "camping_cut") 
            or die("fail connection");

    if (isset($_GET['tours_id'])) {
        $tours_id = $_GET['tours_id'];
        
        $query = "SELECT * FROM tours WHERE tours_id ='$tours_id'";
        $result = mysqli_query($con, $query);
        
        if ($row = mysqli_fetch_assoc($result)) {
        ?>
        
    
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <img src="<?php echo $row['tours_image']; ?>" class="card-img-top" alt="tours_image" style="height: 300px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['tours_title']; ?></h5>
                        <p class="card-text">
                            <strong>Description:</strong> <?php echo $row['tours_description']; ?><br>
                            <strong>Monthly Price:</strong> <?php echo $row['tours_price']; ?><br>
                        </p>
                        
                        <form action="book.php" method="post">
                            <input type="hidden" name="b_id" value="<?php echo $row['tours_id']; ?>">
                            <div class="form-group">
                                <label for="u_id">User ID:</label>
                                <input type="text" class="form-control" name="u_id" id="u_id" required>
                            </div>
                            <div class="form-group">
                                <label for="start_date">Start Date:</label>
                                <input type="date" class="form-control" name="start_date" id="start_date" required>
                            </div>
                            <div class="form-group">
                                <label for="end_date">End Date:</label>
                                <input type="date" class="form-control" name="end_date" id="end_date" required>
                            </div>
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <input type="text" class="form-control" name="status" id="status" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        } else {
            echo "<div class='alert alert-danger' role='alert'>Room details not found.</div>";
        }
    } else {
        echo "<div class='alert alert-danger' role='alert'>Tour ID is not provided.</div>";
    }
    ?>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>