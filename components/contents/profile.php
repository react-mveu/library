    <div class="container clearfix">
        <main class="content">
            <p style="text-align: center; font-size: 30px; margin: 0; padding: 1.5em 0;">МОИ ДАННЫЕ</p>
            <div class="profile">
                <div class="menu_prof">
                    <a href="profile.php">МОИ ДАННЫЕ</a>
                    <a href="orders_user.php">МОИ ЗАКАЗЫ</a>
                    <a href="adminka/controllers/exit_user.php">ВЫХОД</a>
                </div>
                <div class="value_profile" >

                    <table>
                        <tr>
                            <td><b>ФИО: </b><?php echo $_SESSION['client']['surname'] . " " . $_SESSION['client']['name'] . " " . $_SESSION['client']['l_name'] ?></td>
                        <tr>
                            <td><b>Логин: </b><?php echo $_SESSION['client']['login'] ?></td>
                        <tr>
                            <td><b>Номер телефона: </b><?php echo $_SESSION['client']['phone'] ?></td>
                        </tr>
                    </table>

                </div>

            </div>
        </main>
