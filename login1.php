<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dentile a Medical Category Bootstrap Responsive Website Template | login :: W3layouts
	</title>
	<style>
        .register {
            color: white; /* Change this to the desired text color */
            background-color: black; /* Optional: change the background color */
            padding: 10px 150px;
            border: none;
            cursor: pointer;
            font-size: 15px;
			
        }
    </style>

	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700&display=swap" rel="stylesheet">
	<!-- Template CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
</head>

<body>
	<!--w3l-header-->
	<?php include "l_header.php";
	?>
	<!-- //w3l-header -->
    <!-- /login-form -->
	<section class="w3l-contact-main">
		<div class="contant11-top-bg py-5 border border-5 ">
			<div class="container py-5">
				<div class="row contact-info-left d-flex justify-content-center text-left">
					<div class="col-lg-5 col-md-5 contact-info">
						<div class="contact-gd">
							<div class="container-center">
							<form name="contactform " id="contactform" method="post" action="login_con.php">
								<div class="row">
									<div class="col-md-12" >
										<h2><b>Login<b></h2>
										<p>Please fill in your username password.</p>
										<form action="" method="post">
											<div class="form-group">
												<label>User-Name</label>
													<input type="username" name="username" class="form-control" placeholder="Enter username" required/>
											</div>
										<div class="form-group">
											<label>Password</label>
												<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
										</div>
									<div class="form-group">
										<input type="submit" name="submit" class="btn btn-primary" value="Submit">
									</div>
									<p>Din't have an account? <a href="register.php" class="btn btn-contact">Register Here</a></p>
										</form>
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--w3l-footer-->
	<?php include "l_footer.php";
	?>
	<!-- //w3l-footer -->
</body>
</html>