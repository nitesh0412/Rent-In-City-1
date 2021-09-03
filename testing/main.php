<?php
    session_start();
    $connect = mysqli_connect("localhost", "root", "", "rent_in_city");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/property_list.css" rel="stylesheet" />
</head>
<body>
    <?php
        // $all_columns = "SELECT * FROM products";
        // $result = mysqli_query($connect, $all_columns);
        // unset($ids_array);
        // while($row = mysqli_fetch_array($result))
        // {
        //     $ids_array[] = $row['category'];
        // }
        // return unique array values;
        // argument query;
        // argument which column;
        
        // foreach(array_unique($ids_array) as $x => $x_value){
        //     echo $x_value . '<br>';
        // }
        $category = array_unique(AllItemsInAColumn("SELECT * FROM products", "category"));
        echo array_values($category);
        //print_r(AllItemsInAColumn("SELECT * FROM products", "category"));

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
</body>
</html>
