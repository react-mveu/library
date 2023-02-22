<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
include "db.php";

$book = $_GET['book'];
$name_book = $_POST['name_book'];
$year = $_POST['year'];
$link = $_POST['link'];
$cat = $_POST['cat'];
$add_book = $_POST['add_book'];

$name = $_FILES['image']['name'];
$type = $_FILES['image']['type'];
$tmp_name = $_FILES['image']['tmp_name'];
$size = $_FILES['image']['size'];
$full_path = "../images/$name";

if ($name) {
    $str_add_book = "UPDATE `catalog` SET `title`='$name_book',`category`='$cat',`year`='$year',`filename`='$link',`picture`='$name' WHERE id=$book";
    if ($add_book) {
        if ($type == 'image/jpeg') {
            if ($size < 59000) {
                if ($name_book && $year && $link && $cat) {
                    $run_add_book = mysqli_query($connect, $str_add_book);
                    if ($run_add_book) {
                        move_uploaded_file($tmp_name, $full_path);
                        $_SESSION['message_ch_book'] = "Вы успешно изменили книгу!";
                        header("Location:../category.php?cat=" . $cat);
                    }
                } else {
                    $_SESSION['error_ch_book'] = "Заполните поля!";
                    header("Location:../category.php?cat=" . $cat);
                }
            } else {
                $_SESSION['error_ch_book'] = "Слишком большой размер файла!";
                header("Location:../category.php?cat=" . $cat);
            }
        } else {
            $_SESSION['error_ch_book'] = "Неверный тип файла!";
            header("Location:../category.php?cat=" . $cat);
        }
    }
} else {
    $str_add_book = "UPDATE `catalog` SET `title`='$name_book',`category`='$cat',`year`='$year',`filename`='$link' WHERE id=$book";
    if ($add_book) {
        if ($name_book && $year && $link && $cat) {
            $run_add_book = mysqli_query($connect, $str_add_book);
            $_SESSION['message_ch_book'] = "Вы успешно изменили книгу!";
            header("Location:../category.php?cat=" . $cat);
        } else {
            $_SESSION['error_ch_book'] = "Заполните поля!";
            header("Location:../category.php?cat=" . $cat);
        }
    }
}