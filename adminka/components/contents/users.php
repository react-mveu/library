<div class="container clearfix">
    <main class="content">
        <!-- for-example -->
        <p style="text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;">Пользователи:</p>
        <?php
        echo "<p>$_SESSION[message_ch_user]</p>";
        echo "<p style='color: red'>$_SESSION[error_ch_user]</p>";
        if ($_SESSION['message_ch_user'] || $_SESSION['error_ch_user']) {
            session_unset();
        }
        ?>
        <div class="boxes">
            <?php
            $str_out_users = "SELECT * FROM `users` WHERE role=1";
            $run_out_users = mysqli_query($connect, $str_out_users);
            while ($out_users = mysqli_fetch_array($run_out_users)) {
                echo "
                        <div class='box'>
                            <p>ID: $out_users[id]</p>
                            <p>ФИО: $out_users[surname] $out_users[name] $out_users[l_name]</p>
                            <p>Логин: $out_users[username]</p>
                            <p>Телефон: $out_users[phone]</p>
                            <p>
                                <a href=controllers/del.php?del_user=$out_users[id] class=delete>
                                    Удалить
                                </a>	
                            </p>
                            <p>
                                <a href=change_user.php?user=$out_users[id] class=book-link>
                                    Изменить
                                </a>	
                            </p>
                        </div>
                        ";
            }
            ?>
        </div>
    </main>
