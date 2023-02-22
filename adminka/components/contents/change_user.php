    <?php
    $user = $_GET['user'];
    $str_out_user = "SELECT * FROM `users` WHERE id=$user";
    $run_out_user = mysqli_query($connect, $str_out_user);
    $out_user = mysqli_fetch_array($run_out_user);
    ?>
    <div class="container clearfix">
        <main class="content"><div class="reg_form">
                <p style="text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;">Изменение пользователя</p>
                <form method="POST" action="controllers/change_user.php?user=<?php echo $out_user['id']?>" enctype="multipart/form-data">
                    <input type="text" name="surname" value="<?php echo $out_user['surname']?>" placeholder="Фамилия">
                    <input type="text" name="name" value="<?php echo $out_user['name']?>" placeholder="Имя">
                    <input type="text" name="l_name" value="<?php echo $out_user['l_name']?>" placeholder="Отчество">
                    <input type="text" name="login" value="<?php echo $out_user['username']?>" placeholder="Логин">
                    <input type="password" name="pass" value="<?php echo $out_user['password']?>" placeholder="Пароль">
                    <input type="password" name="repass" value="<?php echo $out_user['password']?>" placeholder="Повторите пароль">
                    <input type="text" name="phone" value="<?php echo $out_user['phone']?>" placeholder="Номер телефона">
                    <input type="submit" name="change_user" value="Изменить">
                </form>
            </div>
        </main>