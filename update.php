<?php
//print_r($_GET);
require_once 'config/connect.php';
$product_id = $_GET['id'];
//print_r($product_id);
$product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id`=$product_id");
$product = mysqli_fetch_assoc($product);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<h2>Update  the  <?=$product['title']?></h2>
<form action="vendor/update.php" method="post">
    <input type="hidden" name="id" value="<?=$product['id']?>">
    <p>Title</p>
    <input type="text" name="title" value="<?=$product['title']?>">
    <p>Description</p>
    <textarea name="Description"><?=$product['description']?></textarea>
    <p>Price</p>
    <input type="number" name="price" value="<?=$product['price']?>">
    <br><br>
    <button type="submit">Update </button>
</form>
</body>
</html>
