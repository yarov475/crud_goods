<?php
require_once 'config/connect.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>products</title>
    <link rel="stylesheet" href="index.css">
  </head>
<body>
<h1>CRUD App</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
    </tr>


<tr>
    <?php
    $products = mysqli_query($connect, "SELECT * FROM `products`");
    $products = mysqli_fetch_all( $products);
     foreach ($products as $product){
   ?>
    <td><?= $product[0] ?></td>
    <td><?= $product[1] ?></td>
    <td><?= $product[3] ?></td>
    <td><?= $product[2] ?> $ </td>
    <td><a href="update.php?id=<?= $product[0] ?>">Update</a></td>
</tr>
<?php
         }
     ?>
</table>
<h2>Add new product</h2>
<form action="vendor/create.php" method="post">
    <p>Title</p>
    <input type="text" name="title">
    <p>Description</p>
    <textarea name="Description"></textarea>
    <p>Price</p>
    <input type="number" name="price">
    <br><br>
    <button type="submit">Add </button>
</form>
</body>
</html>
