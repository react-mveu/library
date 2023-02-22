<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
include "db.php";

$user = $_GET['user'];
$surname = $_POST['surname'];
$name = $_POST['name'];
$l_name = $_POST['l_name'];
$login = $_POST['login'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];
$repass = $_POST['repass'];
$change_user = $_POST['change_user'];

$str_add_user = "UPDATE `users` SET `username`='$login',`password`='$pass',`name`='$name',`surname`='$surname',`l_name`='$l_name',`phone`='$phone' WHERE id=$user";

if ($surname AND $name AND $l_name AND $login AND $pass AND $repass AND $phone) {
    if ($pass == $repass) {
        $run_add_user = mysqli_query($connect, $str_add_user);
        if ($run_add_user) {
            if ($change_user) {
                $_SESSION['message_ch_user'] = "Вы успешно изменили пользователя!";
                header("Location:../users.php");
            }
        } else {
            if ($change_user) {
                $_SESSION['error_ch_user'] = "Ошибка изменения пользователя!";
                header("Location:../users.php");
            }
        }
    } else {
        if ($change_user) {
            $_SESSION['error_ch_user'] = "Не совпадают пароли!";
            header("Location:../users.php");
        }
    }
} else {
    if ($change_user) {
        $_SESSION['error_ch_user'] = "Заполните все поля!";
        header("Location:../users.php");
    }
}
