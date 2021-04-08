<?php
require_once '../config/connect.php';
$title = $_POST['title'];
$price= $_POST['price'];
$description = $_POST['Description'];
$id = $_POST['id'];

mysqli_query($connect, "UPDATE `products` SET `title` = '$title', `price` = '$price', `description` = '$description' WHERE `products`.`id` = $id");
header('location: ../index.php');
