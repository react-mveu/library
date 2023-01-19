        <div class="container clearfix">
            <main class="content-login">
                <!-- for-example -->
                <p style="text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;">Вход:</p>
                <form action="controllers/auth.php" method="POST" class="login-form">
                    <input type="text" name="login_auth" placeholder="Логин"><br>
                    <input type="password" name="pass_auth" placeholder="Пароль"><br>
                    <input type="submit" name="auth_admin" value="Войти">
                </form>
                <?php
                    echo $_SESSION['message'];
                    if ($_SESSION['message']) {
                        session_unset();
                    }
                ?>
            </main>
        </div>