<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yetra Tours and Travels</title>
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        /* General Reset and Styling */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
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
                background: #007bff;
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
                background: #007bff;
            }
        }
    </style>
</head>

<body>

    <!-- Header and Navigation -->
    <header>
        <nav class="py-3">
            <div id="logo">
                <h1><a class="navbar-brand" href="index.php">Yatra Tours and Travels</a></h1>
            </div>
            <label for="drop" class="toggle">Menu</label>
            <input type="checkbox" id="drop" />
            <ul class="menu mt-2">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
               <li class="dropdown">
                        <li><a href="features.php">Services</a></li>
                        <li><a href="tours1.php">Tours</a></li>
                        
                    
                </li>
                <?php 
                if(isset($_SESSION['user'])){ ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php 
                }else { ?>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                <?php 
                }
                ?>
                <li><a href="contact.php">Feedback</a></li>
            </ul>
        </nav>
    </header>

</body>

</html>