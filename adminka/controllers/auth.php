<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
include "db.php";
$login_auth = $_POST['login_auth'];
$pass_auth = $_POST['pass_auth'];
$auth = $_POST['auth'];
$auth_admin = $_POST['auth_admin'];

if ($auth_admin) {

    $str_auth_data = "SELECT * FROM `users` WHERE `username` = '$login_auth' AND `password` = '$pass_auth'";
    $str_auth_role = "SELECT * FROM `users` WHERE `username` = '$login_auth' AND `password` = '$pass_auth' AND `role` = '0'";

    $run_auth_data = mysqli_query($connect, $str_auth_data);
    $run_auth_role = mysqli_query($connect, $str_auth_role);

    $auth_data = mysqli_num_rows($run_auth_data);
    $auth_role = mysqli_num_rows($run_auth_role);

    if ($auth_data == 1) {
        if ($auth_role == 1) {
            $auth = mysqli_fetch_array($run_auth_role);

            $_SESSION['user'] = array(
                'id' => $auth['id'],
                'login' => $auth['username'],
                'pass' => $auth['password'],
                'name' => $auth['name'],
                'surname' => $auth['surname'],
                'l_name' => $auth['l_name'],
                'phone' => $auth['phone'],
                'role' => $auth['role']
            );

            header("Location:../books.php");
        } else {
            $_SESSION['message'] = "Вы не админ!";
            header("Location:../index.php");
        }
    } else {
        $_SESSION['message'] = "Учётные данные не верны!";
        header("Location:../index.php");
    }
} elseif ($auth) {

    $str_auth_data = "SELECT * FROM `users` WHERE `username` = '$login_auth' AND `password` = '$pass_auth'";

    $run_auth_data = mysqli_query($connect, $str_auth_data);

    $auth_data = mysqli_num_rows($run_auth_data);

    if ($auth_data == 1) {
        $auth = mysqli_fetch_array($run_auth_data);

        $_SESSION['client'] = array(
            'id' => $auth['id'],
            'login' => $auth['username'],
            'pass' => $auth['password'],
            'name' => $auth['name'],
            'surname' => $auth['surname'],
            'l_name' => $auth['l_name'],
            'phone' => $auth['phone'],
            'role' => $auth['role']
        );

        header("Location:../../profile.php");
    } else {
        $_SESSION['message'] = "Учётные данные не верны!";
        header("Location:../../");
    }
}