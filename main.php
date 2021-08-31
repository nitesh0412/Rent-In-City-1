<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "rent_in_city");
$i=2;
$query = "SELECT name FROM img where id=$i";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_array($result);
// echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['id'] ).'"/>';
echo $row['name'];
echo "hello";

?>