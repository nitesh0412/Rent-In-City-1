<?php
    session_start();
    $connect = mysqli_connect("localhost", "root", "", "rent_in_city");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Save Money | Rent in City</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine" /> -->
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/property_list.css" rel="stylesheet" />
</head>

<body>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Header -->

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
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                            <i class="fas fa-user"></i>Signup
                        </a>
                    </li>

                    <div class="nav-vl"></div>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                            <i class="fas fa-sign-in-alt"></i>Login
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>

            <li class="breadcrumb-item active" aria-current="page">Mumbai</li>
        </ol>
    </nav>


    <!-- Page Container -->
    <div class="page-container">

        <div class="filter-bar row justify-content-around">
            <div class="col-auto" data-toggle="modal" data-target="#filter-modal">
                <img src="img/filter.png" alt="filter" />
                <span>Filter</span>
            </div>

            <div class="col-auto">
                <img src="img/desc.png" alt="sort-desc" />
                <span>Highest rent first</span>
            </div>

            <div class="col-auto">
                <img src="img/asc.png" alt="sort-asc" />
                <span>Lowest rent first</span>
            </div>
        </div>

        <!-- Sliders -->

        <?php
            $numberOfSlidersPerCategory = 4;

            $category = array_values(array_unique(AllItemsInAColumn("SELECT category FROM products", "category")));
            for($index = 0; $index < count($category); $index++){
                echo "<div class='slider-category'><div class='category-heading'><a href='#'>$category[$index]</a></div><div class='more'><a href='#'>More</a></div></div><div class='slider-bg'><div class='track'><i class='fa fa-angle-left fa-2x' aria-hidden='true'></i>";
                $ids_query = "SELECT * FROM products where category = '$category[$index]'";
                $result = mysqli_query($connect, $ids_query);
                $loop = 0;
                unset($ids_array);
                while($row = mysqli_fetch_array($result))
                {
                    if($loop >= $numberOfSlidersPerCategory)
                        break;
                    $ids_array[] = $row['id'];
                    $loop++;
                }
                foreach($ids_array as $id){
                    $query = "SELECT * FROM products where category = '$category[$index]' and id=$id";
                    $result = mysqli_query($connect, $query);
                    $row = mysqli_fetch_array($result);
                    $name = $row['name'];
                    $id = $row['id'];
                    $price = $row['price'];
                    $image = $row['image'];
                    echo '<div class="property-card row" id="xyz"><div class="individual-slider">';
                    echo '<a href="#"><img class="img" src="data:image/jpeg;base64,'.base64_encode( $image ).'"/></a>';
                    echo "<h3>$name</h3>";
                    echo '<div class="individual-slider-content-wrap">';
                    echo "<div class='price'>Price: $price Rs </div>";
                    echo '<div class="button"><a href="#" class="button-text">View</a></div></div></div></div>';  
                }
                echo '<i class="fa fa-angle-right fa-2x" aria-hidden="true"></i></div></div>';
                unset($ids_array);
            }

            function AllItemsInAColumn($query, $column_name){
                $connect = mysqli_connect("localhost", "root", "", "rent_in_city");
                $result = mysqli_query($connect, "$query");
                while($row = mysqli_fetch_array($result))
                {
                    $x[] = $row["$column_name"];
                }
                return $x;
            }
        ?>

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

        <div class="footer-copyright">Made by Shrishty Saxena</div>

    </div>

</body>
</html>