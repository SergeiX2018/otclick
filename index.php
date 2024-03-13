<?php

$id = $_COOKIE['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();
    for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
    k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
 
    ym(91644043, "init", {
         clickmap:true,
         trackLinks:true,
         accurateTrackBounce:true
    });
 </script>
 <noscript><div><img src="https://mc.yandex.ru/watch/91644043" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
 <!-- /Yandex.Metrika counter -->
    <link rel="stylesheet" href="style/style.css">
   
    <title>Главная страница</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-wrap">
                <div class="search-logo_wrap">
                    <div class="logo_wrap">
                        <div class="logo logo_top">
                            <a>
                                <img src="img/logo_two.png" class='logo_img' alt="логотип">
                            </a>
                        </div>
                    </div>
                    <div id="sweeties" class="menu">
                        <span class="title">Выбор города</span>
                        <ul class="city">
                            <li><a href="#" class="city_link">Москва</a></li>
                          <li><a href="#" class="city_link">Ростов-на-Дону</a></li>
                          <li><a href="#" class="city_link">Санкт-Петербург</a></li>
                          <li><a href="#" class="city_link">Казань</a></li>
                          <li><a href="#" class="city_link">Краснодар</a></li>
                          <li><a href="#" class="city_link">Сочи</a></li>
                          <li><a href="#" class="city_link">Екатеринбург</a></li>
                          <li><a href="#" class="city_link">Ульяновск</a></li>
                          <li><a href="#" class="city_link">Тюмень</a></li>
                          <li><a href="#" class="city_link">Новосибирск</a></li>
                          <li><a href="#" class="city_link">Набережные Челны</a></li>
                          <li><a href="#" class="city_link">Самара</a></li>
                        </ul>
                    
                      </div>
                    </div>
                <?php

                    if($_COOKIE['volunteer'] =='' AND $_COOKIE['needy']=='' ) :

                ?>
                    <div class="right_group-block">
                    <div class="reg-auth_btn-block">
                    
                        <a class="reg_items" href="authorization.php" id="auth">Войти</a>
                
                    
                        <a class='reg_items-no-svg' id="reg" href="select_registration.php">регистрация</a>
                    
                </div>
                
                <?php elseif($_COOKIE['volunteer']): 
                    
                    ?>
                    <div class="right_group-block">
                    <div class="office-exit_btn-block">
                        
                        <a class="office_items" href="office_volunteer.php?id=<?php echo $id?>">личный кабинет</a>
                
                    
                        <a class="exit_items" href="exit.php">выйти</a>
                    </div>

                    <?php elseif($_COOKIE['needy']): 
                ?>
                <div class="right_group-block">
                <div class="office-exit_btn-block">
                    
                    <a class="office_items" href="office_needy.php?id=<?php echo $id?>">личный кабинет</a>
            
                
                    <a class="exit_items" href="exit.php">выйти</a>
                </div>
                <?php endif;?>
                
                <div class="search">
                
                    
                    <input type="search" class="site-search" name="search" placeholder="поиск...">
                    <div class="search-img_block">
                        <img  class="logo_items" src="img/search.png"  alt="поиск">
                    </div>
                </div>
                
                </div>
            
            </div>  
            <nav class="nav_menu">
                <ul class="nav_list">
                    <li class="nav_items" ><a href="volunteers.php" class="nav_links" id="vol">Волонтёры</a></li>
                    <li class="nav_items"><a href="help_people.php" class="nav_links" id="help_people">Помощь людям</a></li>
                    <li class="nav_items"><a href="shelters.php" class="nav_links" id="help_animal">Помощь животным</a></li>
                    <li class="nav_items"><a href="events.php" class="nav_links" id="event">Мероприятия</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main">
        
            <div class="description_area-block">
                <div class="description_img-block"></div>
                <div class="header-text_block">
                    <p class="description_text">Участниками нашего проекта являются волонтёры, и люди которые желают 
                        оказывать помощь нуждающимся в ней другим людям, так же нуждающиеся в помощи люди смогут без труда оставлять заявки о помощи на портале,
                        участники проекта могут оказывать помощь в приютах для животных. </p>
                </div>
            </div>
            <div class="btn_registration-block">
                <a href="registration_needy.php" class="reg_btn" id="help">получить помощь</a>
                <a href="registration.php" class="reg_btn" id="volunteers">стать волонтером</a>
            </div>

            <h2 class="reviews_header">Отзывы тех, кому мы помогли</h2>

            <div id="carousel" class="carousel">
                <button class="arrow prev"></button>
                <div class="gallery">
                    <ul>
                        <li><a href="reviews.php" class="img_reviews-one" id="gallery_img"></a></li>
                        <li><a href="reviews.php" class="img_reviews-two"></a></li>
                        <li><a href="reviews.php"class="img_reviews-three"></a></li>
                        <li><a href="reviews.php"class="img_reviews-one"></a></li>
                        <li><a href="reviews.php" class="img_reviews-two"></a></li>
                        <li><a href="reviews.php" class="img_reviews-three"></a></li>
                        <li><a href="reviews.php" class="img_reviews-one"></a></li>
                        <li><a href="reviews.php" class="img_reviews-two"></a></li>
                        <li><a href="reviews.php" class="img_reviews-three"></a></li>
                    </ul>
                </div>
                <ul id="radio_btn" class="gallery-radio-btn">
                    <li id="1" class="radio-items"><div class="radio_elem"></div></li>
                    <li  id="2" class="radio-items"><div class="radio_elem"></div></li>
                    <li   id="3" class="radio-items"><div class="radio_elem"></div></li>
                    <li   id="4" class="radio-items"><div class="radio_elem"></div></li>
                    <li  id="5" class="radio-items"> <div class="radio_elem"></div></li>
                </ul>
                <button class="arrow next"></button>
            </div>   
    </main>
    
<?php
    require 'footer.php';
    ?>
    
    <script src='scripts/main.js'></script>

</body>
</html>











