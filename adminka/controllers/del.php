<?php
    error_reporting(E_ERROR | E_PARSE);
    include "db.php";
    $del_cat = $_GET['del_cat'];
    $del_book = $_GET['del_book'];
    if ($del_cat) {
        $del_id = $del_cat;
        $table = 'category';
        $file = 'categories.php';
    } elseif ($del_book) {
        $del_id = $del_book;
        $table = 'catalog';
        $file = 'books.php';
    }
    $str_del_cat = "DELETE FROM `$table` WHERE id=$del_id";
    $run_del_cat = mysqli_query($connect, $str_del_cat);
    header('Location:../' . $file);