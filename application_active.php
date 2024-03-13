<?php

$needy_id=$_GET['id'];                            
$db = mysqli_connect("localhost", "root", "", "vol_needy");
$query = mysqli_query($db, "SELECT * FROM `needy` WHERE `id`='$needy_id'");
$array = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/application_active.css">

    <title>Активная заявка</title>
</head>
<body>
<?php
    require 'header.php';
    ?>

<main>
    <div class="container">
        <a  class = 'btn-back 'href="">Назад</a>

        <form action="">
            <div class="application-people_block">
                <div class="application_information_block">
                    <h1 class="application-header">Активная заявка</h1>

                    <?php
                            require 'configDB.php';
                                                        
                            $query = $pdo->query("SELECT * FROM `applications_active` JOIN needy ON applications_active.needy_id=needy.id");
                                    
                                while($row = $query->fetch(PDO::FETCH_OBJ)) {
                                    $img= $row->img_needy;
                                    $full_img=base64_encode($img);
                                    $id=$row->id;
                                    $message_needy=  $array['message_needy'];
                                    $m=$row->message_needy;
                                    $id_volunteer=$row->id_volunteer;
                                    $id_needy=$row->id_needy;
                                    $fio=$row->fio;
                                    $d1 = date('Y', strtotime($date)); 
                                    $d2 = date("Y"); 
                                    $full_date=$d2-$d1;
                                    $city= $row->city;
                                    $address= $row->address;
                                    $application_number=$row->application_number;
                                    $currents_date=$row->currents_date;
                                    $info= $row->info;
                        ?>
                            
                        <?php 
                                    
                            }
                 
                         ?>

                    <div class="info-item">
                    <div class="left-info_item">
                        <img class="application_img"  src="data:image/jpeg;base64, <?=$full_img ?>"alt="">
                        <div class="date-application_block">
                            <div class="option_input number-application">Номер заявки: <?php echo $application_number?></div>
                            <div class="option_input date-application">Дата оформления заявки:  <?php echo $currents_date?></div>
                        </div>
                    </div>
                    <div class="right_block">
                         <div class="right-info_item">
                        <div class="surname people_items">Фамилия: <?php echo explode(' ', $array['fio'])[0]?></div>
                        <div class="name people_items">Имя: <?php echo explode(' ', $array['fio'])[1]?></div>
                        <div class="last-name people_items">Отчество: <?php echo explode(' ', $array['fio'])[2]?></div>
                        <div class="age people_items">Возраст:  <?php echo $full_date?></div>
                        <div class="city people_items">Город:  <?php echo $city?></div>
                        <div class="address people_items">Адрес:  <?php echo $address?></div>
                        <div class="info">Дополнительная информация:  <?php echo $info?></div>
                       
                    </div>
                    <div class="form-application_btn">
                            <a class="write_btn"  href="">написать</a>
                            <a class="complete_btn" href="">завершить</a>
                        </div>
                    </div>
                         
                    </div>
                    <div class="info_block">Нуждаюсь в...<?php echo $info?></div>
                </div>
            
            </div>
            
        </form>
    </div>
</main>

<?php
    require 'footer.php';
    ?>






    