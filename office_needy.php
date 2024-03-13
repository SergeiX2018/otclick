<?php

session_start();


$id=$_GET['id'];
echo $id;

$_SESSION["needy_id"] = $id;


$needy_id = $_SESSION["needy_id"];

setcookie("id", $id, time()+3600,'/');

$id = $_COOKIE['id'];


$db = mysqli_connect("localhost", "root", "", "vol_needy");
$query = mysqli_query($db, "SELECT * FROM `needy` WHERE `id`='{$id}'");
$array = mysqli_fetch_array($query);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет нуждающегося <?=$array['vol_id']?></title>
    
    <link rel="stylesheet" href="style/office_needy.css">
</head>
<body>
<?php
    require 'header.php';
    ?>
    <main>
        <div class="container">
        <form id="volonteers-dic_data-list" name="form" method="post" action="change_profile-needy.php?id=<?=$id ?>" enctype="multipart/form-data">
            <section class="office-volonteers_wrap">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
                <h2 class="office-volonteers_header">Личный кабинет нуждающегося</h2>
                <div class="edit-btn_block">
                    <div class="edit_btn" id="edit_btn">редактировать</div>
                </div>
                
                <div class="volontteers-items_block">
                    <ul class="application_list">
                        <li class="applications_items new">
                        <a class="applications_link" id="new" href='new_application.php?id=<?=$id ?>'>Новые заявки</a>
                            
                        </li>
                        <li class="applications_items active">
                        
                            <p  id="active"><a class="applications_link" href='applications_active.php?id=<?=$id ?>'>Активные заявки</a></p>
                        </li>
                        <li class="applications_items complete">
                            <a href='application_complete.php?id=<?=$id ?>' class="applications_link"  id="complete">Завершенные</a>
                        </li>
                        <li class="applications_items message">
                            <p  id="message"><a class="applications_link" href='message_needy.php?id=<?=$id ?>'>Сообщения</p></a>
                        </li>
                      
                       
                        <li class="applications_items-strip"><hr></li>
                        <li class="applications_items password" id= change_password>
                        <a href="change_password.php" class="applications_link">Изменить пароль</a>
                        </li>
                    </ul>
                    <div class="volonteers-dic_list">
                        <div class="volonteers-dis_items">
                              
                            <div class="volonteers-dic_img"  id="volonteers_load-img">
                            <p id ="text">Загрузите ваше фото</p>
                            <?php
                             

                             require 'configDB.php';
                                                   

                       $query = $pdo->query('SELECT * FROM `needy`');
                       
                           while($row = $query->fetch(PDO::FETCH_OBJ)) {
                            $show_img = base64_encode($row->img_needy);
                              $id=$row->id;
                              $fio= $row->fio;
                              $date= $row->date;
                             
                             
                              $city= $row->city;
                              $address= $row->address;
                              $phone= $row->phone;
                              $email= $row->email;
                              $info= $row->info;
                           };
                           $id= $array['id'];
                           $date= $array['date'];
                           $img=$array['img_needy'];
                           $full_img=base64_encode($img);
                           $d1 = date('Y', strtotime($date)); 
                           $d2 = date("Y"); 
                           $full_date=$d2-$d1;
                           ?>

                              <img class="volunteers_img" src="data:image/jpeg;base64, <?=$full_img ?>" id="img_profile"  alt="Аватар">
                            </div>
                            </div>
                            <div class="input_block-img">
                            <input type="file"  name="img_upload" class="input_domload"   id="input_domload" onchange="readFile(this)">
                                            <!-- <input type="reset" value="очистить" class="clear" id="clear"> -->
                            
                               
                               
                               
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



















                    <div   id="volonteers-dic_data-list" class="volonteers-dic_data-list" >
                        <div id="contacts_block" class="name_block">
                    
                            <div class="option_input" id="surname"> Фамилия:  <?php echo explode(' ', $array['fio'])[0]?></div>
                        </div>
                        <div id="contacts_block" class="name_block">
                            <div class="option_input" id="name">Имя: <?php echo explode(' ', $array['fio'])[1]?></div>
                        </div>
                        <div id="contacts_block" class="name_block">
                            <div class="option_input" id="patronymic"> Отчество: <?php echo explode(' ', $array['fio'])[2]?></div>
                        </div>
                        <div id="contacts_block" class="age_block">
                            <div class="option_input" id="age"> Возраст: <?php echo $full_date?></div>
                        </div>
                        <div id="contacts_block" class="adress_block">
            
                            <div class="option_input" id="city">Город:  <?php echo $array['city']?></div>
                        </div>
                        <div id="contacts_block" class="adress_block">
                            <div class="option_input" id="address">Адрес: <?php echo $array['address']?></div>
                        </div>
                        <div id="contacts_block" class="contact-number_block">
                    
                            <div class="option_input" id="number">Телефон:  <?php echo $array['phone']?></div>  
                        </div>
                        <div id="contacts_block" class="contact-number_block">
            
                            <div class="option_input" id="email">Почта:  <?php echo $array['email']?></div>  
                        </div>
                        <div id="contacts_block" class="about-me_block">
                            
                            <div  class="option_textarea option_input" id="about-me">Дополнительная информация:  <?php echo $array['info']?></div>
                        </div>







                        <div id="contacts_edit-block" class="name_block">
                            <label class="option_item" for="surname"></label>
                            <input class="option_input" id="surname" placeholder="Фамилия: " type="text"  name="f" >
                        </div>
                        <div id="contacts_edit-block" class="name_block">
                            <label class="option_item" for="name"></label>
                            <input class="option_input" id="name" placeholder="Имя:" type="text"  name="i" >
                        </div>
                        <div id="contacts_edit-block" class="name_block">
                            <label class="option_item" for="patronymic"></label>
                            <input class="option_input" id="patronymic" placeholder="Отчество:" type="text"  name="o" >
                        </div>
                        <div id="contacts_edit-block"  class="age_block">
                            <label class="option_item" for="age"></label>
                            <input class="option_input" id="age" placeholder="Возраст:" type="date"  name="date" >
                        </div>
                        <div id="contacts_edit-block" class="adress_block">
                            <label class="option_item" for="city"></label>
                            <input class="option_input" id="city" placeholder="Город:" type="text"  name="city" >
                        </div>
                        <div id="contacts_edit-block" class="adress_block">
                            <label class="option_item" for="address"></label>
                            <input class="option_input" id="address" placeholder="Адрес: " type="text"  name="address" >
                        </div>
                        <div id="contacts_edit-block" class="contact-number_block">
                            <label class="option_item" for="number"></label>
                            <input class="option_input" id="number" placeholder="Телефон:" type="tel"  name="phone" >  
                        </div>
                        <div id="contacts_edit-block" class="contact-number_block">
                            <label class="option_item" for="email"></label>
                            <input class="option_input" id="email" placeholder="Почта:" type="email" name="email" >  
                        </div>
                        <div  id="contacts_edit-block" class="about-me_block">
                            <label class="option_item" for="about-me"></label>
                            <textarea  class="option_textarea option_input" placeholder="Дополнительная информация:" name="info"  id="about-me"></textarea>
                        </div>













                        
                            <button type="submit" id='help-people' class="help-people_btn">Получить помощь</button>
                        </div>
                </div> 
            </section>   
                        </form>
        </div>
    </main>
    <?php
    require 'footer.php';
    ?>
   <script src="scripts/office_needy.js"></script>

</body>
</html>