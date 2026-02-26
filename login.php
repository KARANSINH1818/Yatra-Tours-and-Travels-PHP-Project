<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Camping a Travel Category Bootstrap Responsive Template | Contact :: W3layouts</title>
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
<!-- Custom CSS -->
<style>
        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .main-content.inner {
            padding: 20px 0;
            text-align: center;
        }

        /* Login Form Styles */
        .contact-form-inner {
            background: #fff;
            padding: 40px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-form-inner .form-group {
            margin-bottom: 20px;
        }

        .contact-form-inner .form-group label {
            font-weight: 600;
            color: #007bff;
        }

        .contact-form-inner .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
            font-size: 16px;
            color: #333;
            width: 100%;
        }

        .contact-form-inner .form-control:focus {
            border-color: #007bff;
            box-shadow: none;
            outline: none;
        }

        .contact-form-inner .btn-primary {
            background: #007bff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
            width: 100%;
        }

        .contact-form-inner .btn-primary:hover {
            background: #0056b3;
        }

        /* Title Styles */
        .inner-sec-w3pvt h3.tittle {
            font-size: 36px;
            font-weight: 700;
            color: #333;
            margin-bottom: 50px;
        }

        .inner-sec-w3pvt h3.tittle.inner-tittle {
            color: #007bff;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .contact-form-inner {
                padding: 20px;
            }

            .inner-sec-w3pvt h3.tittle {
                font-size: 28px;
            }
        }

        @media (max-width: 576px) {
            .contact-form-inner {
                padding: 15px;
            }

            .inner-sec-w3pvt h3.tittle {
                font-size: 24px;
            }
        }
    </style>
    <!-- //Fonts -->

</head>

<body>
    <!-- mian-content -->
    <div class="main-content inner" id="home">
<?php include "header.php";?>
    </div>
    <!-- //main-content -->
    <!--/contact -->
    <section class="ab-info-main py-md-5 py-5">
        <div class="container">
            <div class="inner-sec-w3pvt py-lg-5">
                <h3 class="tittle text-center mb-lg-5 mb-3 inner-tittle"> LOGIN</h3>
                <div class="contact-form mt-md-5">
                    <div class="contact-form-inner mx-auto text-left">
                        <form name="contactform " id="contactform" method="post" action="login_code.php">
                            <div class="row">
                                <div class="col-lg-10 con-gd">
                                    <div class="form-group">
                                        <label>EMAIL</label>
                                        <input type="email" class="form-control" id="name" placeholder="ENTER EMAIL" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label>PASSWORD</label>
                                        <input type="password" class="form-control" id="name" placeholder="ENTER PASSWORD" name="password">
                                    </div>    
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <div class="map mt-md-5">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//contact -->
    <?php include "footer.php";?>
    