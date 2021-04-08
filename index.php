<?php
require_once 'connect.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>products</title>
    <style>
        th,td{
            padding: 10px;
        }

        th{
            background-color: purple;
            color: aqua;
        }
        td{
            background-color: rgb(128, 128, 128);
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
    </tr>

   <?php
   $products = mysqli_query($connect, "SELECT * FROM `products`");
   //var_dump($products);
   $products = mysqli_fetch_all( $products);
   //print_r( $products);
   foreach ($products as $product){
       echo '
       <tr>
            <td>' . $product[0].'</td>
            <td>gitara</td>
            <td>guitar from gavana</td>
            <td>1000000$</td>
     </tr>';
   }

   ?>




</table>
</body>
</html>
