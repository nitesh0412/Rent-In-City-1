<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome |Rent in City</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/home.css" rel="stylesheet" />
    <link href="css/hover.css" rel="stylesheet" />
	
</head>

<body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <a class="navbar-brand" href="index.php">
                    <h1>𝐑𝐞𝐧𝐭 𝐈𝐧 𝐂𝐢𝐭𝐲🌈™</h1>
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <div class="dropdown">

                        <a class="nav-link">
                            <i class="fas fa-user"></i>Welcome
                        </a>
                        <div class="dropdown-content">
							<a href="dashboard.php">Profile</a>
							<a href="upload.php">upload</a>
							<a href="cart.php">Cart</a>
							<a href="orders.php">Orders</a>
							<a href="index.php">Logout</a>
						</div>
					</div>
                    
                </ul>
            </div>
        </nav>
    </div>

    <div id="loading"></div>

    <div class="banner-container">
        <h2 class="white pb-3">Rent Anything Anywhere Anytime</h2>

        <form id="search-form">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id="city" name="city" placeholder="Enter your city to search for Rent" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
              <i class="fa fa-search"></i>
            </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="city-heading">Major Cities</h1>
        <div class="row">
            <div class="city-card-container col-md">
                <a href="property_list.php">
                    <div class="city-card rounded-circle">
                        <img src="img/delhi.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php">
                    <div class="city-card rounded-circle">
                        <img src="img/mumbai.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php">
                    <div class="city-card rounded-circle">
                        <img src="img/bangalore.png" class="city-img" />
                    </div>
                </a>
            </div>

            <div class="city-card-container col-md">
                <a href="property_list.php">
                    <div class="city-card rounded-circle">
                        <img src="img/hyderabad.png" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <div class="footer">
        <div class="footer-cities">
            <div class="footer-city">
                <a href="property_list.php">Rent in Delhi</a>
            </div>
            <div class="footer-city">
                <a href="property_list.php">Rent in Mumbai</a>
            </div>
            <div class="footer-city">
                <a href="property_list.php">Rent in Bangalore</a>
            </div>
            <div class="footer-city">
                <a href="property_list.php">Rent in Hyderabad</a>
            </div>
        </div>
        <div class="footer-copyright">Made by Sloath Bears</div>
    </div>
</body>

</html>
