<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'crudunicode');
if (!$connect) {
    die('error connect db!!');
}