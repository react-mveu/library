<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if ($_SESSION['user']) {
    header("Location:books.php");
}
include "components/header.php";
include "components/contents/login.php";
include "../components/footer.php";