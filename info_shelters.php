<?php

$id = $_GET['id'];

$db = mysqli_connect("localhost", "root", "", "vol_needy");
$query = mysqli_query($db, "SELECT * FROM `shelters` WHERE `id`='$id'");
$array = mysqli_fetch_array($query);
$img = base64_encode($array['image']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/info_shelters.css">
    <title>Приюты для домашних животных</title>
</head>
<body>
<?php
    require 'header.php';
    ?>
    <main>
        <div class="container">
            <section class="helters_section">
                <h2 class="shelters_header">Информация о приюте для животных</h2>


                
                          
                                
                                
                                
                                  <div class="info_shelters-wrap">
                    <div class="left_shelters-block">
                        <img src="data:image/jpeg;base64, <?=$img?>" class = "shelters_img">
                        <h3 class="shelters_name"><?=$array['name']?></h3>
                    </div>
                    <div class="right_shelters-block">
                        <p class="info_shelters"><?= $array['description']?></p> 
                        
                         
                        <a class="info_shelters-btn" href="http://poteryashka.spb.ru/" target="_blank">посетить</a>
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