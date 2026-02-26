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
     <!-- Custom CSS -->
     <style>
        /* General Reset and Styling */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Navigation Bar */
        nav {
            background: #007bff;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: white;
        }

        nav h1 a {
            font-size: 24px;
            color: white;
        }

        .menu {
            list-style: none;
            display: flex;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        .menu li {
            margin-left: 20px;
        }

        .menu li a {
            color: white;
            font-size: 16px;
            font-weight: 500;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .menu li a:hover,
        .menu li.active a {
            background: rgba(255, 255, 255, 0.1);
        }

        /* Dropdown Menu */
        .dropdown ul {
            display: none;
            position: absolute;
            background: #007bff;
            list-style: none;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
        }

        .dropdown:hover ul {
            display: block;
        }

        .dropdown ul li {
            margin: 5px 0;
        }

        .dropdown ul li a {
            padding: 8px;
            display: block;
            width: 150px;
        }

        /* Toggle Menu for Mobile */
        .toggle {
            display: none;
        }

        input[type=checkbox] {
            display: none;
        }

        @media (max-width: 768px) {
            .menu {
                display: none;
                flex-direction: column;
                width: 100%;
                position: absolute;
                top: 70px;
                left: 0;
                padding: 20px 0;
            }

            .menu li {
                margin: 10px 0;
                text-align: center;
            }

            .menu ul {
                position: static;
            }

            .toggle {
                display: block;
                font-size: 24px;
                cursor: pointer;
            }

            #drop:checked ~ .menu {
                display: flex;
            }

            .dropdown ul {
                position: static;
                
            }
        }
    </style>

</head>

<body>
    <!-- mian-content -->
    <div class="main-content" id="home">
         <nav class="py-3">
                    <div id="logo">
                        <h1> <a class="navbar-brand" href="admin-home.php">Yatra Tours and Traveles</a>
                        
                        <ul class="menu mt-2">
                        <li class=><a href="admin-home.php">HOME</a></li>
                        <li class=><a href="admin-view.php">USERS</a></li>
                        <li class=><a href="admin-view-tours.php">TOURS</a></li>
                        <li class=><a href="booking.php">BOOKING</a></li>
                        <li class=><a href="feedback.php">FEEDBACK</a></li>
                        <li><a href="logout.php">LOGOUT</a>
                         </li>
                    </div>
                    
            
                <!-- //nav -->
            </div>
        </header>