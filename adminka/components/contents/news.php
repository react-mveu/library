<div class="container clearfix">
    <main class="content">
        <!-- for-example -->
        <p style="text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;">Категория:</p>
        <?php
        echo "<p>$_SESSION[message_ch_news]</p>";
        echo "<p style='color: red'>$_SESSION[error_ch_news]</p>";
        if ($_SESSION['message_ch_news'] || $_SESSION['error_ch_news']) {
            session_unset();
        }
        ?>
        <div class="reg_form">
            <form method="POST">
                <input type="text" name="name" placeholder="Заголовок">
                <textarea name="text_news" placeholder="Текст новости"></textarea>
                <input type="submit" name="add" value="Добавить">
            </form>
        </div>
        <?php
        $name = $_POST['name'];
        $text_news = $_POST['text_news'];
        $add = $_POST['add'];
        $str_add_news = "INSERT INTO `news`(`name`, `text`) VALUES ('$name','$text_news')";
        if ($add) {
            if ($name) {
                if ($text_news) {
                    $run_add_cat = mysqli_query($connect, $str_add_news);
                }
            }
        }
        ?>
        <div class="boxes">
            <?php
            $str_out_news = "SELECT * FROM `news`";
            $run_out_news = mysqli_query($connect, $str_out_news);
            while ($out_news = mysqli_fetch_array($run_out_news)) {

                echo "
                        <div class='box'>
                            <p>ID: $out_news[id]</p>
                            <p>Название: $out_news[name]</p>
                            <p>Дата: $out_news[date]</p>
                            <p>
                                <a href='change_news.php?news=$out_news[id]' class=book-link>
                                    Изменить
                                </a>	
                            </p>
                            <p>
                                <a href='controllers/del.php?del_news=$out_news[id]' class=delete>
                                    Удалить
                                </a>	
                            </p>
                        </div>
                        ";
            }
            ?>
        </div>
    </main>
