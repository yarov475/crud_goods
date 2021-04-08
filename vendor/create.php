<?php
require_once '../config/connect.php';

//проверяем что приходит

//print_r($_POST);
//print_r($_POST['title']);
//print_r($_POST['Description']);
//print_r($_POST['price']);

$title = $_POST['title'];
$description = $_POST['Description'];
$price= $_POST['price'];

mysqli_query($connect, "INSERT INTO `products` (`id`, `title`, `price`, `description`) VALUES (NULL, '$title ', '$price', '$description ' )");