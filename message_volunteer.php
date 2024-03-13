<?php
$id_volun = $_GET['id'];



$id_vol = $_COOKIE['id_vol'];


$id_needy = $_COOKIE['id'];





// $db = mysqli_connect("localhost", "root", "", "vol_needy");
// $query = mysqli_query($db, "SELECT * FROM `dialogue_needy` WHERE `id_needy`='$id'");
// $array = mysqli_fetch_array($query);

// $query = mysqli_query($db, "SELECT * FROM dialogue_volunteers  WHERE id_needy IN ( SELECT id_needy FROM dialogue_volunteers  GROUP BY id_needy HAVING count(*) > 1 ) ORDER BY id_needy");

?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сообщения</title>
    <link rel="stylesheet" href="style/message_new.css">

</head>
<body>
<?php
    require 'header.php';
    ?>
    <main>
        <div class="container">
            <section class="message_block">
                <h1 class="message_header">Сообщения</h1>
                <form action="" class="message_form">
                    <ul class="message_list">
                       


                        <?php
                            require 'configDB.php';
                                                        
                            
                            $query = $pdo->query("SELECT * FROM `dialogue_volunteers` JOIN needy ON dialogue_volunteers.id_needy=needy.id WHERE `id_volunteer`='$id_volun'   AND `message_needy`  IS NOT NULL");
                                    
                                while($row = $query->fetch(PDO::FETCH_OBJ)) {
                                    $img= $row->img_needy;
                           
                                    $full_img=base64_encode($img);
                                    $id=$row->vol_id;
                                    $message_needy=  $array['message_needy'];
                                    $m=$row->message_needy;
                                    $id_volunteer=$row->id_volunteer;
                                    $id_needy=$row->id_needy;
                                    
                                    ?>





                            <li class="message_items">
                         

                        </p>
                            <img src="data:image/jpeg;base64, <?=$full_img ?>" class="img_message" alt="">
                            <p class="message_text"><?php echo  $m?></p>
                            <a href="dialogue_volunteers.php?id=<?=$id_needy,$id_volun ?>"  class="message_btn">Написать</a>
                           
                            </li>
                            <hr>
                       
                            <?php 
                                
                                
                               
                              
                                
                            }
                 
                         ?>

                       
                    </ul>
                </form>












            </section>
        </div>
    </main>
    <?php
    require 'footer.php';
    ?>
         
</body>
</html>