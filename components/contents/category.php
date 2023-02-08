<?php
    $id_cat = $_GET['id_cat'];
    $str_out_cat = "SELECT * FROM `catalog` WHERE category=$id_cat";
    $run_out_cat = mysqli_query($connect, $str_out_cat);
    $category_query = "SELECT * FROM `category` WHERE id=$id_cat";
    $category_run = mysqli_query($connect, $category_query);
    $category_out = mysqli_fetch_array($category_run);
?>

        <div class="container clearfix">
            <main class="content">
                <!-- for-example -->
                <p style="text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;">Книги категории <?php echo $category_out['category_name'] ?>:</p>
                    <div class="boxes">
                        <?php
                        while ($out_cat = mysqli_fetch_array($run_out_cat)) {
                            echo "
                                <div class='box'>
                                    <p><img src=images/$out_cat[picture] alt=Обложка книги height=150px></ul>
                                    <p><p align=center>Название: $out_cat[title]</p></li>
                                    <p><p align=center>Год: $out_cat[year]</p></p>
                                    <p><a href=$out_cat[filename] class='book-link'>Ссылка</a></p>
                                </div>
                            ";
                        }
                        ?>
                    </div>
            </main>