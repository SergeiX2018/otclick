
<?php
$id = $_GET['id'];

$db = mysqli_connect("localhost", "root", "", "vol_needy");
$query = mysqli_query($db, "SELECT * FROM `events` WHERE `id`='$id'");
$array = mysqli_fetch_array($query);
$img = base64_encode($array['image']);
?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Описание мероприятия</title>
    <link rel="stylesheet" href="style/info_events.css">
</head>
<body>
<?php
    require 'header.php';
    ?>
    <main>
        <div class="container">
            <section class="helters_section">
                <h2 class="shelters_header">Описание мероприятия</h2>


               



                <div class="info_shelters-wrap">
                    <div class="left_shelters-block">
                    <img src="data:image/jpeg;base64, <?=$img?>" class = "events_img-one">
                    
                        <h3 class="shelters_name"><?=$array['name']?></h3>
                    </div>
                    <div class="right_shelters-block">
                        <p class="info_shelters"><?= $array['description']?></p> 
                           
                         
                        <a class="info_shelters-btn" href="http://poteryashka.spb.ru/" target="_blank">участвовать</a>
                    </div>
                </div>
                
               
            </section>

        </div>

    </main>
    <?php
    require 'footer.php';
    ?>

</body>
</html>