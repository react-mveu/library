            <aside class="sidebar sidebar1">
                <div class="nav">
                    <ul class="topmenu">
                        <li><a href="index.php" style="margin-top: 10px">Главная</a></li>
                        <li><a href="">Категории</a>
                            <ul class="submenu">
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
                        </li>
                        <li>
                            <a href="contacts.php">Контакты</a>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>