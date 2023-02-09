<div class="container clearfix">
    <main class="content">
        <p style="text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;">Заказы</p><br/>

        <?php
        $str_out_user_order = "SELECT DISTINCT `user_id` FROM `orders`";
        $run_out_user_order = mysqli_query($connect, $str_out_user_order);

        while ($out_user_order = mysqli_fetch_array($run_out_user_order)) {
            $user_id = $out_user_order['user_id'];
            $str_out_user = "SELECT * FROM `users` WHERE id=$user_id";
            $run_out_user = mysqli_query($connect, $str_out_user);
            $out_user = mysqli_fetch_array($run_out_user);

            echo "<p style='text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;'>$out_user[surname] $out_user[name] $out_user[l_name] - $out_user[username]</p>";

            echo "
				
					<div class=boxes>
				
				";

            $str_out_user_orders = "SELECT * FROM `orders` WHERE user_id=$user_id";
            $run_out_user_orders = mysqli_query($connect, $str_out_user_orders);

            while ($out_user_orders = mysqli_fetch_array($run_out_user_orders)) {
                $prod_id = $out_user_orders['book_id'];
                $str_out_prod = "SELECT * FROM `catalog` WHERE id=$prod_id";
                $run_out_prod = mysqli_query($connect, $str_out_prod);
                $out_prod = mysqli_fetch_array($run_out_prod);

                echo "
					    <div class='box'>
							<p>$out_user_orders[id]</p>
							<p>$out_prod[title]</p>
							<p>Заказан</p>
							<p>$out_user_orders[creation_date]</p>
							<p>
								<a href=controllers/del.php?del_order=$out_user_orders[id] class=delete>
									Удалить
								</a>	
							</p>
						</div>
					
					";
            }

            echo "</div>";
        }
        ?>
        </main>
