        <div class="container clearfix">
            <main class="content">
                <!-- for-example -->
                <p style="text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;">Новости:</p>
                <?php
                $str_out_news = "SELECT * FROM `news`";
                $run_out_news = mysqli_query($connect, $str_out_news);

                while ($out_news = mysqli_fetch_array($run_out_news)) {
                    echo "
                                        <h1>$out_news[name]</h1>
                                        <p>$out_news[date]</p>
                                        <p>$out_news[text]</p>
                                    ";
                }
                ?>
            </main>