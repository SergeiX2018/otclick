<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/select_registration.css">
    <title>Выбор регистрации</title>
</head>
<body>
    
<?php
    require 'header.php';
    ?>
    <main>
        <div class="select-registration_block">
            <div class="select-registration_img"></div>
        </div>
        <ul class="select_btn-block">
            <li class="select-btn_items">
                <a  class="select-btn_links"  id="help_get">Получить помошь</a>
            </li>
            <li  class="select-btn_items"> 
                <a  class="select-btn_links" src="registration.php" id = volunteers_become>Стать волонтером</a>
            </li>
        </ul>
    </main>
    <?php
        require 'footer.php';
    ?>

    <script>
        let selectBlock = document.querySelectorAll('.select_btn-block')[0];
        selectBlock.addEventListener('click', function(e){
            let target=e.target;
            if(target.id=='help_get'){
                window.location.href = 'registration_needy.php';
            }
            if(target.id=='volunteers_become'){
                window.location.href = 'registration.php';
            }
        })
    </script>
</body>
</html>