<?php
$news = $_GET['news'];
$str_out_news = "SELECT * FROM `news` WHERE id=$news";
$run_out_news = mysqli_query($connect, $str_out_news);
$out_news = mysqli_fetch_array($run_out_news);
?>
<div class="container clearfix">
    <main class="content">
        <!-- for-example -->
        <p style="text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;">Изменения книги:</p>
        <div class="reg_form">
            <form method="POST" action="controllers/change_news.php?news=<?php echo $out_news['id']?>" enctype="multipart/form-data">
                <input type="text" name="name" value="<?php echo $out_news['name']?>" placeholder="Заголовок">
                <textarea name="text" placeholder="Текст новости"><?php echo $out_news['text']?></textarea>
                <input type="submit" name="change_news" value="Изменить новость">
            </form>
        </div>
    </main>
