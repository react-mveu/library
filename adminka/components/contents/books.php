<div class="container clearfix">
    <main class="content">
        <!-- for-example -->
        <p style="text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;">Категория:</p>
        <div class="reg_form">
            <form method="POST">
                <input type="text" name="name_cat" placeholder="Наименование">
                <input type="submit" name="add_cat" value="Добавить категорию">
            </form>
        </div>
        <?php
        $name_cat = $_POST['name_cat'];
        $add_cat = $_POST['add_cat'];
        $str_add_cat = "INSERT INTO `category`(`category_name`) VALUES ('$name_cat')";
        if ($add_cat) {
            if ($name_cat) {
                $run_add_cat = mysqli_query($connect, $str_add_cat);
            }
        }
        ?>
        <table>
            <tr>
                <th>№ п/п</th>
                <th>Наименование</th>
                <th>Книги в этой категории</th>
                <th>Действия</th>
            </tr>

            <?php
            $str_out_cat = "SELECT * FROM `category`";
            $run_out_cat = mysqli_query($connect, $str_out_cat);
            while ($out_cat = mysqli_fetch_array($run_out_cat)) {

                echo "
                        
                        <tr>
                            <td>$out_cat[id]</td>
                            <td>$out_cat[category_name]</td>
                            <td>
                                <a href='category.php?cat=$out_cat[id]' class=books>
                                    Перейти
                                </a>	
                            </td>
                            <td>
                                <a href='controllers/del.php?del_cat=$out_cat[id]' class=delete>
                                    Удалить
                                </a>	
                            </td>
                        </tr>
                        
                        ";
            }
            ?>
        </table>
    </main>