<?php
    error_reporting(E_ERROR | E_PARSE);
    include "db.php";
    $del_cat = $_GET['del_cat'];
    $del_book = $_GET['del_book'];
    $del_news = $_GET['del_news'];
    $del_user = $_GET['del_user'];
    $del_order = $_GET['del_order'];
    if ($del_cat) {
        $del_id = $del_cat;
        $table = 'category';
        $file = 'books.php';
    } elseif ($del_book) {
        $del_id = $del_book;
        $table = 'catalog';
        $file = 'category.php';
    } elseif ($del_news) {
        $del_id = $del_news;
        $table = 'news';
        $file = 'news.php';
    } elseif ($del_user) {
        $del_id = $del_user;
        $table = 'users';
        $file = 'users.php';
    } elseif ($del_order) {
        $del_id = $del_order;
        $table = 'orders';
        $file = 'orders.php';
    }
    $str_del_cat = "DELETE FROM `$table` WHERE id=$del_id";
    $run_del_cat = mysqli_query($connect, $str_del_cat);
    header('Location:../' . $file);
