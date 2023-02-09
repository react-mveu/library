    <div class="container clearfix">
        <main class="content">
            <font color="green"><?php $_SESSION['message']?></font>
            <font color="red"><?php $_SESSION['error']?></font>
            <p style="text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;">Регистрация</p>
            <div class="reg_form">
                <form method="POST" action="adminka/controllers/registration.php" enctype="multipart/form-data">
                    <input type="text" name="surname" placeholder="Фамилия">
                    <input type="text" name="name" placeholder="Имя">
                    <input type="text" name="l_name" placeholder="Отчество">
                    <input type="text" name="login" placeholder="Логин">
                    <input type="password" name="pass" placeholder="Пароль">
                    <input type="password" name="repass" placeholder="Повторите пароль">
                    <input type="text" name="phone" placeholder="Номер телефона">
                    <input type="submit" name="reg" value="Регистрация">
                </form>
            </div>
        </main>