<div class="container clearfix">
    <main class="content">
        <!-- for-example -->
        <p style="text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;">Категория:</p>
        <div class="reg_form">
            <form method="POST">
                <input type="text" name="name" placeholder="Заголовок">
                <input type="text" name="text_news" placeholder="Текст новости">
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
        <table>
            <tr>
                <th>№ п/п</th>
                <th>Наименование</th>
                <th>Дата</th>
                <th>Действия</th>
            </tr>

            <?php
            $str_out_news = "SELECT * FROM `news`";
            $run_out_news = mysqli_query($connect, $str_out_news);
            while ($out_news = mysqli_fetch_array($run_out_news)) {

                echo "
                        
                        <tr>
                            <td>$out_news[id]</td>
                            <td>$out_news[name]</td>
                            <td>$out_news[date]</td>
                            <td>
                                <a href='controllers/del.php?del_news=$out_news[id]' class=delete>
                                    Удалить
                                </a>	
                            </td>
                        </tr>
                        
                        ";
            }
            ?>
        </table>
    </main>
