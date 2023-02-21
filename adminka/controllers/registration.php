<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
include "db.php";

$surname = $_POST['surname'];
$name = $_POST['name'];
$l_name = $_POST['l_name'];
$login = $_POST['login'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];
$repass = $_POST['repass'];
$add_user = $_POST['add_user'];
$reg = $_POST['reg'];

$str_add_user = "INSERT INTO `users`(`surname`, `name`, `l_name`, `username`, `password`, `phone`, `role`)
VALUES ('$surname','$name','$l_name','$login','$pass', '$phone', '1')";

if ($surname AND $name AND $l_name AND $login AND $pass AND $repass AND $phone) {
    if ($pass == $repass) {
        $run_add_user = mysqli_query($connect, $str_add_user);
        if ($run_add_user) {
            if ($add_user) {
                $_SESSION['message_reg'] = "Вы успешно добавили пользователя!";
                header("Location:../users.php");
            } elseif ($reg) {
                $_SESSION['message_reg'] = "Вы успешно зарегистрировались!";
                header("Location:../../registration.php");
            }
        } else {
            if ($add_user) {
                $_SESSION['error_reg'] = "Ошибка добавления пользователя!";
                header("Location:../users.php");
            } elseif ($reg) {
                $_SESSION['error_reg'] = "Ошибка регистрации!";
                header("Location:../../registration.php");
            }
        }
    } else {
        if ($add_user) {
            $_SESSION['error_reg'] = "Не совпадают пароли!";
            header("Location:../users.php");
        } elseif ($reg) {
            $_SESSION['error_reg'] = "Не совпадают пароли!";
            header("Location:../../registration.php");
        }
    }
} else {
    if ($add_user) {
        $_SESSION['error_reg'] = "Заполните все поля!";
        header("Location:../users.php");
    } elseif ($reg) {
        $_SESSION['error_reg'] = "Заполните все поля!";
        header("Location:../../registration.php");
    }
}
