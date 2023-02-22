    <?php
    $book = $_GET['book'];
    $str_out_book = "SELECT * FROM `catalog` WHERE id=$book";
    $run_out_book = mysqli_query($connect, $str_out_book);
    $out_book = mysqli_fetch_array($run_out_book);
    ?>
    <div class="container clearfix">
        <main class="content">
            <!-- for-example -->
            <p style="text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;">Изменения книги:</p>
            <div class="reg_form">
                <form method="POST" enctype="multipart/form-data">
                    <input type="text" name="name_book" value="<?php echo $out_book['title']?>" placeholder="Наименование книги">
                    <input type="text" name="link" value="<?php echo $out_book['filename']?>" placeholder="Ссылка на книгу">
                    <input type="number" name="year" value="<?php echo $out_book['year']?>" placeholder="Год">
                    <select name="cat">
                        <?php
                        $str_out_cat = "SELECT * FROM `category`";
                        $run_out_cat = mysqli_query($connect, $str_out_cat);
                        while ($out_cat = mysqli_fetch_array($run_out_cat)) {
                            echo "
                    
                                <option value=$out_cat[id]>$out_cat[category_name]</option>
                    
                            ";
                        }
                        ?>
                    </select>
                    <br><br>Изображение:<br>
                    <input type="file" name="image"><br>
                    <input type="submit" name="add_book" value="Изменить книгу">
                </form>
            </div>
            <?php
            $name_book = $_POST['name_book'];
            $year = $_POST['year'];
            $link = $_POST['link'];
            $cat = $_POST['cat'];
            $add_book = $_POST['add_book'];

            $name = $_FILES['image']['name'];
            $type = $_FILES['image']['type'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $size = $_FILES['image']['size'];
            $full_path = "../images/$name";

            if ($name) {
                $str_add_book = "UPDATE `catalog` SET `title`='$name_book',`category`='$cat',`year`='$year',`filename`='$link',`picture`='$name' WHERE id=$book";
                if ($add_book) {
                    if ($type == 'image/jpeg') {
                        if ($size < 59000) {
                            if ($name_book && $year && $link && $cat) {
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
            } else {
                $str_add_book = "UPDATE `catalog` SET `title`='$name_book',`category`='$cat',`year`='$year',`filename`='$link' WHERE id=$book";
                if ($add_book) {
                    if ($name_book && $year && $link && $cat) {
                        $run_add_book = mysqli_query($connect, $str_add_book);
                    } else {
                        echo "Заполните поля!";
                    }
                }
            }

            ?>
    </main>
