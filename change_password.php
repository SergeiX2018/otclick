






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменение пароля</title>
    <link rel="stylesheet" href="style/change_password.css">
</head>
<body>
<?php
    require 'header.php';
    ?>
    <main>
        <div class="container">
            <div class="authorization_block">
                <div class="left_empty_block"></div>
                <p class="authorizstion_header" id="change_header">Изменение пароля</p>
                <p class="recovery_header" id="recovery_header">Восстановление пароля</p>
                <img  class= 'img_pass-two' src="../img/pass.png" alt="">
            </div>
            <div class="group_elem_wrap">
                <img  class= 'img_pass-one' src="../img/pass.png" alt="">
                <form class="auth_form" action="change_pass.php" name="form"  method="post">
                    <div class="auth_form">
                        <div class="img_auth"></div>
                        <span class="error_text">Ошибка входа. Неверный логин или пароль</span>
                        <div class="login-password_group">
                            <input class="change_items" type="text" placeholder="телефон/email" name="email">
                             <input  id="old_password" class="change_items" type="password" placeholder="Старый пароль" name="old_password">
                        </div>
                        
                        <button type= "button" id="forgot_password" class="forgot_password">забыли пароль?</button>
                        <input class="new-password_items" id="new_password" type="password" placeholder="Новый пароль" name="new_password">
                        <button type='submit' id="save_btn" class="save_btn"  name="submit">Сохранить</button>
                        <button type='submit' id="send_btn" class="send_btn" name="submit">Отправить</button>
                    </div>
                    <img  class= 'img_pass-four' src="../img/pass.png" alt="">

















                </form>
                <img  class= 'img_pass-three' src="../img/pass.png" alt="">
            </div>
           
            <div class="img_main"></div>
        </div>
    </main>
    <?php
    require 'footer.php';
    ?>


    <script>
        let forgot_password=document.querySelector('#forgot_password')
        let new_password=document.querySelector('#new_password')
        let old_password=document.querySelector('#old_password')
        let save_btn=document.querySelector('#save_btn')
        let send_btn=document.querySelector('#send_btn')
        let change_header=document.querySelector('#change_header')
        let recovery_header=document.querySelector('#recovery_header')

        forgot_password.addEventListener('click', function(e){
            save_btn.style.display="none"
            send_btn.style.display="block"
            new_password.style.display="none"
            old_password.style.display="none"
            forgot_password.style.display="none"
            change_header.style.display="none"
            recovery_header.style.display="block"

        })
    </script>
</body>
</html>