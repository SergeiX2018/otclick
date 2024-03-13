<?php

$id = $_GET['id'];
setcookie("id", $id, time()+360000,'/');

$id_needy = $_COOKIE['id'];

$id_vol = $_COOKIE['id'];

$id_needy = $_COOKIE['id'];

$id_vol = $_COOKIE['id_vol'];

$db = mysqli_connect("localhost", "root", "", "vol_needy");
$query = mysqli_query($db, "SELECT * FROM `needy` WHERE `id`='{$id}'");
$array = mysqli_fetch_array($query);
?>
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

    $date= $array['date'];
    $img=$array['img_needy'];
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
    <title>Профиль нуждающегося</title>
    
    <link rel="stylesheet" href='style/profile_needy.css'>
</head>
<body>
<?php
    require 'header.php';
    ?>
    <main>
        <div class="container">
            <section class="office-needy_wrap">
                <h2 class="office-needy_header">Нуждающийся</h2>
               
                <div class="profile_block">
                    <div class="needy-dic_list">
                        <div class="needy-dis_items">
                            <img class="needy-dic_img"  id="needy_load-img" src="data:image/jpeg;base64, <?=$full_img ?>"  width='270' heidth = '270'  alt="Аватар">
                            
                        </div>
                
                
                    </div>
                    <div id="needy-dic_data-list" class="needy-dic_data-list">
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
                            <textarea  class="option_textarea option_input" placeholder="Дополнительная информация: <?php echo $array['info']?>" name="about-me" id="about-me"></textarea>
                        </div>
                        
                    </div>
                    <div class="button_profile-block">
                        <a  id='help-people' class="help-people_btn bid" href='drafting.php?id=<?=$array['id']?>'>Помочь</a>
                        <a  id='help-people' class="help-people_btn write"  href='dialogue_volunteers.php?id=<?php echo $id_needy, $id_vol?>'>Написать</a>
                       
                    </div>
                    <div class="block_info"> <?php echo $array['info']?>  </div>
                </div>
                   
            </div>
            </section>   
           
          
        </div>
    </main>
    <?php
    require 'footer.php';
    ?>
   <script src="scripts/office_needy.js"></script>

</body>
</html>