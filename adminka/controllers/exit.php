<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if ($_SESSION['user']) {
    session_unset();
}
$_SESSION['message'] = "Вы вышли!";
header("Location:../index.php");