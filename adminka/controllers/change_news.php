<?php
session_start();
//error_reporting(E_ERROR | E_PARSE);
include "db.php";

$news = $_GET['news'];
$name = $_POST['name'];
$text = $_POST['text'];
$change_news = $_POST['change_news'];

$str_change_news = "UPDATE `news` SET `name`='$name',`text`='$text' WHERE id=$news";
if ($change_news) {
    if ($name && $text) {
        $run_add_book = mysqli_query($connect, $str_change_news);
        $_SESSION['message_ch_news'] = "Вы успешно изменили новость!";
        header("Location:../news.php");
    } else {
        $_SESSION['error_ch_news'] = "Заполните поля!";
        header("Location:../news.php");
    }
}