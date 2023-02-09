    <div class="container clearfix">
        <main class="content">
            <p style="text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;">МОИ ЗАКАЗЫ</p>
            <div class="profile">
                <div class="menu_prof">
                    <a href="profile.php">МОИ ДАННЫЕ</a>
                    <a href="orders_user.php">МОИ ЗАКАЗЫ</a>
                    <a href="adminka/controllers/exit_user.php">ВЫХОД</a>
                </div>
                        <div class="value_profile">

                            <div class="boxes">
                                <?php
                                $client_id = $_SESSION['client']['id'];
                                $str_out_orders = "SELECT * FROM `orders` WHERE user_id=$client_id";
                                $run_out_orders = mysqli_query($connect, $str_out_orders);
                                while ($out_order = mysqli_fetch_array($run_out_orders)) {
                                    echo "
                                            <div class=box>
                                                <p>$out_order[id]</p>
                                        ";

                                    $book_id = $out_order['book_id'];
                                    $str_out_book = "SELECT * FROM `catalog` WHERE id=$book_id";
                                    $run_out_book = mysqli_query($connect, $str_out_book);
                                    $out_book = mysqli_fetch_array($run_out_book);

                                    echo "
                                                <p>$out_book[title]</p>
                                                <img src=images/$out_book[picture] width=60px/>
                                        ";

                                    echo "
                                                <p>$out_order[creation_date]</p>
                                            </div>
                                        ";
                                }
                                ?>

                            </div>

                        </div>
            </div>
        </main>
