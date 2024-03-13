<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/reviews.css">
    <title>Отзывы</title>
</head>
<body>
<?php
    require 'header.php';
?>
    <main>
        <div class="container">
            <section class="review_wrap">
                <h2 class="review_header">Отзывы</h2>
                <ul class="reviews_lists">
                    <li class="reviews_list">
                        <div class="reviews-one_img"></div>
                        <div class="textarea_wrap">
                            <div id="1" class="textarea_reviews">Очень удобная площадка для поиска волонтера.</div>
                        </div>
                    </li>
                    <li class="reviews_list">
                        <div class="reviews-two_img"></div>
                        <div class="textarea_wrap">
                            <div id="2" class="textarea_reviews">Мне тут помогли! Спасибо Вам.</div>
                        </div>
                    </li>
                    <li class="reviews_list">
                        <div class="reviews-three_img"></div>
                        <div class="textarea_wrap">
                            <div id="3" class="textarea_reviews">Хорошо работают администраторы данного сервиса. Быстро отвечают на вопросы.</textarea>
                        </div>
                    </li>
                </ul>
                <div class="btn_wrap">
                    <button class="further_btn">далее</button>
                </div>
            </section>
        </div>
    </main>
    <?php
        require 'footer.php';
    ?>
</body>
</html>