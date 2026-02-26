<nav class="py-3">
                    <div id="logo">
                        <h1> <a class="navbar-brand" href="index.php">Yatra Tours and Traveles</a>
                        </h1>
                    </div>
                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu mt-2">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li class="dropdown">
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Drop Down <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="#">More Info <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            
                            <ul>
                                
                                <li><a href="gallery.php">Gallary</a>
                                </li>
                                <li><a href="features.php">Services</a>

                            </ul>
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
                        <li><a href="contact.php">Contact</a>
                        </li>
                    
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>