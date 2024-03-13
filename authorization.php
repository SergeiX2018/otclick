<?php
session_start();
if(isset($_SESSION['invalid_password'])) {
  session_destroy();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="style/authorization.css">
</head>
<body>
<?php
    require 'header.php';
    ?>
    <main>
        <div class="container">
            <div class="authorization_block">
                <p class="authorizstion_header">Введите логин и пароль для входа в личный кабинет</p>
            </div>
            <form class="auth_form" action="auth.php" method="post">
                <div class="auth_form">
                    <div class="img_auth"></div>

                    <p class="invalid_pass-style"><?php   echo  $_SESSION['invalid_password'] ?></p>
                   <p class="invalid_pass-style"></p>
                    <div class="login-password_group">
                        <input class="auth_items" type="email" placeholder="телефон/email" name="email">
                         <input class="auth_items" type="password" placeholder="Пароль" name="password">
                    </div>
                    
                    <p class="forgot_password">забыли пароль?</p>
                    <button class="open_btn">Войти</button>
                    <p class="account_no">Нет аккаунта? <a href="select_registration.php" class="registration_text">Зарегистрируйтесь</a></p>
                </div>

                <div class="auth-img_main"></div>
               
            </form>
            <div class="img_main"></div>
        </div>
    </main>
    <?php
    require 'footer.php';
    ?>
</body>
</html>