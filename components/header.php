<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
include "adminka/controllers/db.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1">
    <title>Библиотека</title>    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="content-wrapper">
        <header class="header">
            <p style="font-size: 30px; margin: 0; padding: 10px 1em;">Библиотека</p>
            <div class="auth">
                <?php
                if ($_SESSION['client']) {
                    echo "Привет, " . $_SESSION['client']['name'] . "!<br/>";
                    echo "<a href=profile.php>Профиль</a><br>";
                    echo "<a href=adminka/controllers/exit_user.php>ВЫХОД</a>";
                } else {
                    echo "
						
							<h2>Авторизация</h2>
							<form method=POST action=adminka/controllers/auth.php>
								<input type=text name=login_auth placeholder=Логин><br>
								<input type=password name=pass_auth placeholder=Пароль><br>
								<input type=submit name=auth value=Войти><br>
								Нет аккаунта? <a href=registration.php>Создайте!</a>
							</form>
						
						";
                    echo $_SESSION['message'];
                    if ($_SESSION['message']) {
                        session_unset();
                    }
                }
                ?>
            </div>
        </header>