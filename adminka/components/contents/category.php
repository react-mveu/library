<?php
    $cat = $_GET['cat'];
?>

<div class="container clearfix">
    <main class="content">
        <!-- for-example -->
        <p style="text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;">Книги:</p>
        <div class="reg_form">
            <form method="POST" enctype="multipart/form-data">
                <input type="text" name="name_book" placeholder="Наименование книги">
                <input type="text" name="link" placeholder="Ссылка на книгу">
                <input type="number" name="year" placeholder="Год">
                Изображение:<br>
                <input type="file" name="image"><br>
                <input type="submit" name="add_book" value="Добавить книгу">
            </form>
        </div>
        <?php

        $name_book = $_POST['name_book'];
        $year = $_POST['year'];
        $link = $_POST['link'];
        $add_book = $_POST['add_book'];

        $name = $_FILES['image']['name'];
        $type = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $size = $_FILES['image']['size'];
        $full_path = "../images/$name";

        $str_add_book = "INSERT INTO `catalog`(`title`, `category`, `year`, `filename`, `picture`) VALUES ('$name_book','$cat','$year','$link','$name')";

        if ($add_book) {
            if ($type == 'image/jpeg') {
                if ($size < 59000) {
                    if ($name_book) {
                        $run_add_book = mysqli_query($connect, $str_add_book);
                        if ($run_add_book) {
                            move_uploaded_file($tmp_name, $full_path);
                        }
                    } else {
                        echo "Заполните поля!";
                    }
                } else {
                    echo "Слишком большой размер файла!";
                }
            } else {
                echo "Неверный тип файла!";
            }
        }

        ?>

        <table>
            <tr>
                <th>№ п/п</th>
                <th>Название</th>
                <th>Год</th>
                <th>Категория</th>
                <th>Действия</th>
            </tr>

            <?php
            $str_out_book = "SELECT * FROM `catalog` WHERE category=$cat";
            $run_out_book = mysqli_query($connect, $str_out_book);
            while ($out_book = mysqli_fetch_array($run_out_book)) {
                $str_out_cat_book = "SELECT * FROM `category` WHERE id=$out_book[category]";
                $run_out_cat_book = mysqli_query($connect, $str_out_cat_book);
                $out_cat_book = mysqli_fetch_array($run_out_cat_book);

                echo "
                        
                        <tr>
                        <td>$out_book[id]</td>
                        <td>$out_book[title]</td>
                        <td>$out_book[year]</td>
                        <td>$out_cat_book[category_name]</td>
                        <td>
                            <a href=controllers/del.php?del_book=$out_book[id] class=delete>
                                Удалить
                            </a>	
                        </td>
                        </tr>
                        
                        ";
            }
            ?>
        </table>

    </main>
