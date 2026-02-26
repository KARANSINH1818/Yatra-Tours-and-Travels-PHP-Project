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
         /* Registration Form Styles */
         body {
            font-family: 'Poppins', sans-serif;
            color: #333;
        }

         .contact-form-inner {
            background: #fff;
            
        }

.contact-form-inner .form-control:focus {
    border-color: #007bff;
    box-shadow: none;
    outline: none;
}

.contact-form-inner .btn-primary {
    background: #007bff;
    border: none;
    padding: 10px;  /* Match padding with input fields */
    border-radius: 5px;
    font-size: 16px;  /* Match font size with input fields */
    color: #fff;
    cursor: pointer;
    width: 100%;  /* Make the button take up full width */
    margin-top: 20px;
}

.contact-form-inner .btn-primary:hover {
    background: #0056b3;
}

.contact-form-inner label {
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
}
.contact-form-inner .form-group {
            margin-bottom: 20px;
        }

.contact-form-inner .form-group label {
            font-weight: 600;
            color: #007bff;
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
    <section class="ab-info-main py-md-2 py-4">
        <div class="container">
            <div class="inner-sec-w3pvt py-lg-5">
                <h3 class="tittle text-center mb-lg-5 mb-2 inner-tittle">feedbacks</h3>
                <div class="contact-form mt-md-5">
                    <div class="contact-form-inner mx-auto text-left">
                    <form name="contactform" id="contactform" method="post" action="feedback_conecation.php" class="contact-form-inner">
    <div class="row">
        <div class="col-lg-10 con-gd">
            <div class="form-group">
                <label for="f_id">FEEDBACK ID</label>
                <input type="text" class="form-control" id="f_id" placeholder="Enter Feedback ID" name="f_id">
            </div>
            <div class="form-group">
                <label for="u_id">USER ID</label>
                <input type="text" class="form-control" id="u_id" placeholder="Enter User ID" name="u_id">
            </div>
            <div class="form-group">
                <label for="f_rating">FEEDBACK RATING</label>
                <input type="text" class="form-control" id="f_rating" placeholder="Enter Feedback Rating" name="f_rating">
            </div>
            <div class="form-group">
                <label for="f_comments">FEEDBACK COMMENTS</label>
                <input type="text" class="form-control" id="f_comments" placeholder="Enter Comments" name="f_comments">
            </div>
            <div class="form-group">
                <label for="f_date">FEEDBACK DATE</label>
                <input type="date" class="form-control" id="f_date" name="f_date">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
                 </div>
        </div>
    </section>
    <!--//contact -->
    <?php include "footer.php";?>
    