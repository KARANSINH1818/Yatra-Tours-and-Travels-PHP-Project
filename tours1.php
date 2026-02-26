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
     
<?php include "header.php"; ?>

    <div class="slider_area">
        <div class="slider_active owl-carousel">

                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="row">
                
                    <?php
                    $con = mysqli_connect("localhost","root","","camping_cut") 
                    or die("fail connection");
                    $q = "SELECT * FROM tours";
                    $rs = mysqli_query($con, $q);
                    while ($row = mysqli_fetch_array($rs)) {
                    ?>
                
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?php echo $row['tours_image']; ?>" class="card-img-top" alt="Tours image" style="height: 350px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['tours_title']; ?></h5>
                                <p class="card-text">
                                    <strong>Description:-</strong> <?php echo $row['tours_description']; ?><br>
                                    <strong>Price:-</strong> <?php echo $row['tours_price']; ?><br>
                                </p>
                                
                                <!-- Uncomment the following line if you want to add a button for more details or booking -->
                                <a href="book1.php?tours_id=<?php echo $row['tours_id']; ?>" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>