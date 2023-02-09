<?php
//error_reporting(E_ERROR | E_PARSE);
session_start();
include "db.php";

$book_id = $_GET['book_id'];
$user_id = $_SESSION['client']['id'];

$str_add_order = "INSERT INTO `orders`(`user_id`, `book_id`) VALUES ('$user_id','$book_id')";
$run_add_order = mysqli_query($connect, $str_add_order);

if ($run_add_order) {
    header("Location:../../order_success.php");
} else {
    echo "Ошибка заказа!";
}
