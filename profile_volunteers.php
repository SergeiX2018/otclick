<?php

$id_needy = $_COOKIE['id'];
$id = $_GET['id'];

$vol_id = $_GET['id'];
setcookie("vol_id", $vol_id, time()+3600,'/');

$id_volunteer = $_COOKIE['vol_id'];

$db = mysqli_connect("localhost", "root", "", "vol_needy");
$query = mysqli_query($db, "SELECT * FROM `volunteers` WHERE `vol_id`='{$vol_id}'");
$array = mysqli_fetch_array($query);
?>
 <?php
                             
    require 'configDB.php';                       

$query = $pdo->query('SELECT * FROM `volunteers`');

while($row = $query->fetch(PDO::FETCH_OBJ)) {
    $show_img = base64_encode($row->img);
    $id=$row->vol_id;
    $fio= $row->fio;
    $date= $row->date;
    
    $city= $row->city;
    $address= $row->address;
    $phone= $row->phone;
    $email= $row->email;
    $info= $row->info;
};

    $date= $array['date'];
    $img=$array['img'];
    $full_img=base64_encode($img);
    $d1 = date('Y', strtotime($date)); 
    $d2 = date("Y"); 
    $full_date=$d2-$d1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль волонтера</title>
    
    <link rel="stylesheet" href='style/profile_volunteers.css'>
</head>
<body>
<?php
    require 'header.php';
?>
    <main>
        <div class="container">
            <section class="office-volonteers_wrap">
                <h2 class="office-volonteers_header">Волонтер</h2>
               
                <div class="profile_block">
                    <div class="volonteers-dic_list">
                        <div class="volonteers-dis_items">
                            <img class="volonteers-dic_img"  id="volonteers_load-img" src="data:image/jpeg;base64, <?=$full_img ?>"  width='270' heidth = '270'  alt="Аватар">
                         </div>
                        <div class="volonteers-dic_list_color dic-color_change">
                            <p class="volonteer-dic_rating">рейтинг</p>
                            <div class="star-img_wrap">
                                <div class="star-dic_img"></div>
                                <div class="star-dic_img"></div>
                                <div class="star-dic_img"></div>
                                <div class="star-dic_img"></div>
                                <div class="star-dic_img"></div>  
                                
                            </div>
                        </div>
                    </div>
                    <div id="volonteers-dic_data-list" class="volonteers-dic_data-list">
                        <div id="name_block" class="name_block">
                            <label class="option_item" for="surname"></label>
                            <input class="option_input" id="surname" placeholder="Фамилия:<?php echo explode(' ', $array['fio'])[0]?>" type="text">
                        </div>
                        <div id="name_block" class="name_block">
                            <label class="option_item" for="name"></label>
                            <input class="option_input" id="name" placeholder="Имя: <?php echo explode(' ', $array['fio'])[1]; ?>" type="text">
                        </div>
                        <div id="name_block" class="name_block">
                            <label class="option_item" for="patronymic"></label>
                            <input class="option_input" id="patronymic" placeholder="Отчество: <?php  echo explode(' ', $array['fio'])[2];  ?>" type="text">
                        </div>
                        <div class="age_block">
                            <label class="option_item" for="age"></label>
                            <input class="option_input" id="age" placeholder="Возраст: <?php echo $full_date?>" type="number">
                        </div>
                        <div class="adress_block">
                            <label class="option_item" for="city"></label>
                            <input class="option_input" id="city" placeholder="Город: <?php echo $array['city']?>" type="text">
                        </div>
                        <div class="adress_block">
                            <label class="option_item" for="address"></label>
                            <input class="option_input" id="address" placeholder="Адрес: <?php echo $array['address']?>" type="text">
                        </div>
                
                        <div class="about-me_block">
                            <label class="option_item" for="about-me"></label>
                            <textarea  class="option_textarea option_input" placeholder="Дополнительная информация: <?php echo $array['email']?>" name="about-me" id="about-me"></textarea>
                        </div>
                        <div class="button_profile-block">

                            <?php
                                $vol_id = $_GET['id'];

                                $db = mysqli_connect("localhost", "root", "", "vol_needy");
                                $query = mysqli_query($db, "SELECT * FROM `volunteers` WHERE `vol_id`='{$vol_id}'");
                                $array = mysqli_fetch_array($query);
                            ?>
                            <a href='drafting.php?id=<?=$array['vol_id']?>'><button type="button" id='help-people' class="help-people_btn bid">Заявка</button></a>

                            <a href='dialogue_volunteers.php?id=<?=$id_needy, $vol_id?>'><button type="button" id='dialog_volunteers' class="help-people_btn write">Написать</button></a>
                        
                        </div>
                    </div>               
                </div> 
            </section>   
            <section class="reviews-volunteers_wrap">
                <h2 class="volunteers-reviews_header">Отзывы о волонтере</h2>
                <ul class="reviews_list">
                    <li class="reviews_items" id="1">
                        <div class="reviews_img-one id=img_one"></div>
                    </li>
                    <li class="reviews_items">
                        <div class="reviews_img-two" id="img_two"></div>
                    </li>
                    <li class="reviews_items">
                        <div class="reviews_img-three" id="img_three"></div>
                    </li>
                    <li class="reviews_items">
                        <div class="reviews_img-four" id="img_four"></div>
                    </li>
                    <li class="reviews_items">
                        <div class="reviews_img-five" id="img_five"></div>
                    </li>
                    <li class="reviews_items">
                        <div class="reviews_img-seven" id="img_seven"></div>
                    </li>
                </ul>
                <div class="reviews_text-wrap">
                    <div class="textarea_hover" name="" id="1" >какой-то текст при наведении на фото</div>
                </div>
            </section>
        </div>
                        </div>
    </main>
    <?php
         require 'footer.php';
    ?>
   <script src="scripts/profile_volunteers.js"></script>

</body>
</html>