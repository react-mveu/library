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
                <ul>
                    <?php

                    while ($out_cat = mysqli_fetch_array($run_out_cat)) {
                        echo "
                            <li><a href=$out_cat[filename] style='text-align: center; font-size: 20px; margin: 0; padding: 1.5em 0;'>
                                $out_cat[title]
                            </a></li>
                        ";
                    }
                    ?>
                </ul>
            </main>