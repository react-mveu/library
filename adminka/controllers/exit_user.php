<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
if ($_SESSION['client']) {
    session_unset();
}
header("Location:../..");