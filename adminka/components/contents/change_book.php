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
                <form method="POST" action="controllers/change_book.php?book=<?php echo $out_book['id']?>" enctype="multipart/form-data">
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
    </main>
