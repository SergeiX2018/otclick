


<?php
$id_vol = $_GET['id'];



$db = mysqli_connect("localhost", "root", "", "vol_needy");
$query = mysqli_query($db, "SELECT * FROM `volunteers` WHERE `vol_id`='{$id_vol}'");
$array = mysqli_fetch_array($query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет волонтера <?=$array['vol_id']?></title>
    
    <link rel="stylesheet" href="style/office_volonteers.css">
    
</head>
<body>


<?php
    require 'header.php';
?>
    <main>
        <div class="container">
        <form id="volonteers-dic_data-list" name="form" method="post" action="change_profile.php" enctype="multipart/form-data">
            <section class="office-volonteers_wrap">
            <input type="hidden" name="id_vol" value="<?php echo $id_vol; ?>">
                <h2 class="office-volonteers_header">Личный кабинет волонтера</h2>
                <div class="edit-btn_block">
                    <div class="edit_btn" id="edit_btn">редактировать</div>
                </div>
                
                <div class="volontteers-items_block">
                    <ul class="application_list">
                        <li class="applications_items new">
                            <p class="application_header" id="new"><a class="applications_link" href='new_application.php?id=<?=$id_vol ?>'>Новые заявки</a></p>
                        </li>
                        <li class="applications_items active">
                            <p class="application_header" id="active"><a class="applications_link" href='applications_active.php?id=<?=$id_vol ?>'>Активные заявки</a></p>
                        </li>
                        <li class="applications_items complete">
                            <p  id="complete"><a href='application_complete.php?id=<?=$id ?>' class="applications_link">Завершенные</p></a>
                        </li>
                        <li class="applications_items message">
                            <p  id="message"><a class="applications_link" href='message_volunteer.php?id=<?=$id_vol ?>'>Сообщения</a></p>
                        </li>
                        <li class="applications_items-strip"><hr></li>
                        <li class="applications_items help-people">
                            <p id="help_people"><a href="help_people.php" class="applications_link">Помощь людям</p></a>
                        </li>
                        <li class="applications_items help-animals">
                            <p id="help_animals"><a href="shelters.php" class="applications_link animals">Помощь животным</p></a>
                        </li>
                        <li class="applications_items events">
                            <p  id='events'><a href="events.php" class="applications_link">Мероприятия</p></a>
                        </li>
                        <li class="applications_items-strip"><hr></li>
                        <li class="applications_items password" id= change_password>
                            <a href="change_password.php" class="applications_link">Изменить пароль</a>
                        </li>
                    </ul>
                    <div class="volonteers-dic_list">
                        <div class="volonteers-dis_items">
                            <div class="volonteers-dic_img"  id="volonteers_load-img">
                                <p  id ="text">Загрузите ваше фото</p>
                                

                           
                                                    

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

                                   <img class="volunteers_img" id="img_profile" src="data:image/jpeg;base64, <?=$full_img ?>"  alt="Аватар">

                    
                                

                            </div>
                            <div class="input_block-img">
                            
                                            <input type="file"  name="img_upload" class="input_domload"   id="input_domload" onchange="readFile(this)">
                                            <input type="reset" value="очистить" class="clear" id="clear">
                            </div>
                               
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
                        <div class="volonteers-dic_btn-save">
                            <button id="save" type="submit"  class="save_btn">Сохранить</button>
                          
                        </div>
                        
                        </div>
                    <div id="volonteers-dic_data-list" class="volonteers-dic_data-list">
                        <div id="contacts_block" class="name_block">
                          
                            <div class="option_input" id="surname"> Фамилия: <?php echo explode(' ', $array['fio'])[0]?></div>
                        </div>
                        <div id="contacts_block" class="name_block">
                            
                            <div class="option_input" id="name"> Имя: <?php echo explode(' ', $array['fio'])[1]?></div>
                        </div>
                        <div id="contacts_block" class="name_block">
                           
                            <div class="option_input" id="patronymic">Отчество: <?php echo explode(' ', $array['fio'])[2]?></div>
                        </div>
                        <div id="contacts_block">
                          
                            <div class="option_input" id="age"> Возраст: <?php echo $full_date?></div>
                        </div>
                        <div id="contacts_block">
                            
                            <div class="option_input" id="city">Город: <?php echo $array['city']?></div>
                        </div>
                        <div id="contacts_block">
                            
                            <div class="option_input" id="address"> Адрес:<?php echo $array['address']?></div>
                        </div>
                        <div id="contacts_block">
                           
                            <div class="option_input" id="number">Телефон: <?php echo $array['phone']?></div> 
                        </div>
                        <div id="contacts_block">
                           
                            <div class="option_input" id="email">Почта:<?php echo $array['email']?></div>
                        </div>
                        <div id="contacts_block">
                            
                            <div  class="option_textarea">Дополнительная информация: <?php echo $array['info']?></div>
                        </div>



                           


                        <div id="contacts_edit-block" class="name_block">
                            <label class="option_item" for="surname"></label>
                            <input class="option_input" id="surname" placeholder="Фамилия:" type="text" name='f'>
                        </div>
                        <div id="contacts_edit-block" class="name_block">
                            <label class="option_item" for="name"></label>
                            <input class="option_input" id="name" placeholder="Имя:" type="text" name='i'>
                        </div>
                        <div id="contacts_edit-block" class="name_block">
                            <label class="option_item" for="patronymic"></label>
                            <input class="option_input" id="patronymic" placeholder="Отчество:" type="text" name='o'>
                        </div>
                        <div class="age_block" id="contacts_edit-block">
                            <label class="option_item" for="age"></label>
                            <input class="option_input" id="age" placeholder="Возраст:" type="date" name="date">
                        </div>
                        <div class="adress_block" id="contacts_edit-block">
                            <label class="option_item" for="city"></label>
                            <input class="option_input" id="city" placeholder="Город:" type="text" name="city">
                        </div>
                        <div class="adress_block" id="contacts_edit-block">
                            <label class="option_item" for="address"></label>
                            <input class="option_input" id="address" placeholder="Адрес:" type="text" name="address">
                        </div>
                        <div class="contact-number_block" id="contacts_edit-block">
                            <label class="option_item" for="number"></label>
                            <input class="option_input" id="number" placeholder="Телефон:" type="text" name="phone">  
                        </div>
                        <div class="contact-number_block" id="contacts_edit-block">
                            <label class="option_item" for="email"></label>
                            <input class="option_input" id="email" placeholder="Почта:" type="email" name="email">  
                        </div>
                        <div class="about-me_block" id="contacts_edit-block">
                            <label class="option_item" for="about-me"></label>
                            <textarea  class="option_textarea option_input" placeholder="Дополнительная информация:" name="info" id="about-me"></textarea>
                        </div>






















                        <?php

 
 
 



$result=$mysql = new mysqli('localhost', 'root', '', 'vol_needy');
$mysql->query("INSERT INTO volunteers( `fio`, `img`, `date`,  `gender`, `city`, `address`,`phone`, `email`, `password`,`info`) VALUES ('$fio_vol', '$img', '$date_vol', '$gender_vol', '$city_vol', '$address_vol', '$phone_vol', '$email_vol', '$password_vol','$info_vol')");


?>
                        
                            
                        <a href='help_people.php' id='help-people' class="help-people_btn">начать помогать</a>
                   <?php
//                         if(isset($_POST['upload'])){
//   $img_type = substr($_FILES['img_upload']['type'], 0, 5);
//   $img_size = 2*1024*1024;
//   if(!empty($_FILES['img_upload']['tmp_name']) and $img_type === 'image' and $_FILES['img_upload']['size'] <= $img_size){ 
//   $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
//   $mysql->query("INSERT INTO volunteers (img) VALUES ('$img')");
//   }
// }
      ?>             
                   
                   
                   
                   
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
</form>
        </div>
    </main>


    
    <?php
         require 'footer.php';
    ?>

   <script src="scripts/office_volunteers.js"></script>

</body>
</html>