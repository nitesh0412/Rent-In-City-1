<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "rent_in_city");
for ($i = 1; $i <= 4; $i++) {
    $query = "SELECT * FROM img where id=$i";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
    $id = $row['id'];
    $image = $row['image'];
    echo '<div class="property-card row">';
    echo '<img class="img" src="data:image/jpeg;base64,'.base64_encode( $image ).'"/>';
    echo "<h3>$name</h3>";
    echo '<div class="individual-slider-content-wrap">';
    echo '<div class="price">Price: $price Rs </div>';
    echo '<div class="button"><a href="#" class="button-text">View</a></div></div></div></div>';
    
}
?>