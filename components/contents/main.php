        <div class="container clearfix">
            <main class="content">
                <!-- for-example -->
                <p style="text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;">Выберите категорию:</p>
                <ul>
                    <?php
                    $str_out_cat = "SELECT * FROM `category`";
                    $run_out_cat = mysqli_query($connect, $str_out_cat);

                    while ($out_cat = mysqli_fetch_array($run_out_cat)) {
                        echo "
                            <li><a href=category.php?id_cat=$out_cat[id] style='text-align: center; font-size: 30px;'>
                                $out_cat[category_name]
                            </a></li>
                        ";
                    }
                    ?>
                </ul>
            </main>