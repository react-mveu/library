<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
include "db.php";
$login_auth = $_POST['login_auth'];
$pass_auth = $_POST['pass_auth'];
$auth_admin = $_POST['auth_admin'];

if ($auth_admin) {

    $str_auth_data = "SELECT * FROM `users` WHERE `username` = '$login_auth' AND `password` = '$pass_auth'";
    
    $run_auth_data = mysqli_query($connect, $str_auth_data);
    
    $auth_data = mysqli_num_rows($run_auth_data);

    if ($auth_data == 1) {
    
        $_SESSION['user'] = array(
            'id' => $auth['id'],
            'username' => $auth['username'],
            'pass' => $auth['password']
        );
    
        header("Location:../books.php");
    } else {
        $_SESSION['message'] = "Учётные данные не верны!";
        header("Location:../index.php");
    }
}