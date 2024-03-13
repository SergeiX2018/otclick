
<?php
$id = $_GET['id'];

// $id_needy = $_COOKIE['id'];
// echo $id_needy;


$id_n= $id[0];
$id_v= $id[1];






// $db = mysqli_connect("localhost", "root", "", "vol_needy");
// $query = mysqli_query($db, "SELECT * FROM `dialogue_needy` WHERE `id_needy`='$id'");
// $array = mysqli_fetch_array($query);

// $query = mysqli_query($db, "SELECT * FROM dialogue_volunteers  WHERE id_needy IN ( SELECT id_needy FROM dialogue_volunteers  GROUP BY id_needy HAVING count(*) > 1 ) ORDER BY id_needy");

?>
<?php
$vol_id = $_GET['id'];

$db = mysqli_connect("localhost", "root", "", "vol_needy");
$query = mysqli_query($db, "SELECT * FROM `dialogue_volunteers` JOIN volunteers ON dialogue_volunteers.id_volunteer=volunteers.vol_id WHERE `id_volunteer`='$id[1]'");
$query_two = mysqli_query($db, "SELECT * FROM `dialogue_volunteers` JOIN needy ON dialogue_volunteers.id_needy=needy.id WHERE `id_needy`='$id[0]'");
$array = mysqli_fetch_array($query);
$array_two = mysqli_fetch_array($query_two);
$img= $array['img'];
$img_two=$array_two['img'];
$full_im=base64_encode($img);
$full_needy=base64_encode($img_two);

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/dialogue.css">
    <title>диалог</title>
</head>
<body>
<?php
    require 'header.php';
    ?>
    <main>
        <div class="container">
            <div class="back_btn-block">
                <!-- <button class="empty_btn"></button> -->
                <button class="back_btn-item">назад</button>
            </div>
              
      

            <section class="dialogue_section-block">
                <h2 class="dialogue_header">Диалог</h2>
                    <?php
                    if($_COOKIE['volunteer']){
                       echo '<form action="dialogue_processing_volunteers.php" class = "form_dialogue" method="post" name="dialogue_volunteer" enctype="multipart/form-data">';
                    }
                    else{
                        echo '<form action="dialogue_processing_needy.php" class = "form_dialogue" method="post" name="dialogue_volunteer" enctype="multipart/form-data">';
                    }
                    ?>
              
                <input type="hidden" name="id_n" value="<?php echo $id_n; ?>">
                <input type="hidden" name="id_v" value="<?php echo $id_v; ?>">

                <div class="flex-group">
                    <div class="img_flex-group">
                    <img src="data:image/jpeg;base64, <?=$full_im?>" class="dialogue_persone volunteer">
                     <img src="data:image/jpeg;base64, <?=$full_needy?>" class="dialogue_persone">
                    </div>
                
                    <div class="dialogue_textarea-block">
                    <?php
                            require 'configDB.php';
                                                     
                            
                            $query = $pdo->query("SELECT * FROM `dialogue_volunteers`  JOIN needy ON dialogue_volunteers.id_needy=needy.id   JOIN volunteers ON dialogue_volunteers.id_volunteer=volunteers.vol_id WHERE  id_needy=$id_n AND  id_volunteer=$id_v  ");
                            
                                while($row = $query->fetch(PDO::FETCH_OBJ)) {
                                    $img= $row->img;
                                    $img_needy = $row->img_needy;
                                    $full_img=base64_encode($img);
                                    $img=base64_encode($img_needy);
                                    $id=$row->vol_id;
                                    $message_needy= $row->message_needy;
                                    $m=$row->message_volunteer;
                                    $id_volunteer=$row->id_volunteer;
                                    $current_dates=$row->current_dates;
                                    $current_times=$row->current_times;
                                  
                                    ?>

                                    

<input type="hidden" name="id_volunteer" value="<?php echo $id_volunteer; ?>">
<input type="hidden" name="id_v" value="<?php echo $id_v; ?>">
<input type="hidden" name="id_n" value="<?php echo $id_n; ?>">
<div class="textarea_dialogue-block" >
                                        <div class="img-text_wrap">
                                            <div class="img-date_group">
                                                <p class="current-date"><?php echo  $current_dates?></p>
                                                <img src="data:image/jpeg;base64, <?=$full_img?>" class="dialogue_img">
                                            </div>
                                          <div class="time-text-content_block">
                                            <p class="current-time"><?php echo  $current_times?></p>
                                            <p class='message_text'><?php echo  $m?></p>
                                          </div>
                                         
                                       
                                        
                                        </div>
                                        <div class="img-text_wrap">
                                        <div class="img-date_group">
                                                <p class="current-date"><?php echo  $current_dates?></p>
                                        <img src="data:image/jpeg;base64, <?=$img?>" class="dialogue_img">
                                </div>
                                <div class="time-text-content_block">
                                            <p class="current-time"><?php echo  $current_times?></p>
                                        <p class='message_text'><?php echo  $message_needy?></p>
                                </div>
                                       
                                        
                                        </div>
                                </div>
                        
                            
                                
                                <?php 
                                
                                
                               
                              
                                
                            }
                 
                         ?>



                            
                              <?php




                              ?>                          
                        
                            






























                               
                                
                              
                        </div>
                
                </div>
                
                        <div class="write_dialogue-block">
                        <?php
                    if($_COOKIE['volunteer']){
                       echo '<input class="white_input" type="text" placeholder="Напишите сообщение..." name="message_volunteer">';
                    }
                    else{
                        echo '<input class="white_input" type="text" placeholder="Напишите сообщение..." name="message_needy">';
                    }
                    ?>
                                    
                                    <button type="submit" class="dialogue_btn-send">отправить</button>
                            </div> 
                    </div>
                </form>
            </section>
        </div>
    </main>
    <?php
    require 'footer.php';
    ?>




<script>

    let btn = document.querySelector('.dialogue_btn-send')
    let block_dialogue =[...document.querySelectorAll('.textarea_dialogue-block')];
    let items=[...document.querySelectorAll('.textarea_dialogue-block div')]; 
    let f =document.querySelector('.dialogue_textarea-block')
   
    let emptyBlock = document.getElementsByClassName("img-text_wrap");
    let remove_emptyBlock = document.getElementsByClassName("message_text");
       console.log(emptyBlock)             
for(let i = 0; i < remove_emptyBlock.length; i++ ) {
  if(remove_emptyBlock[i].innerHTML=='') {
    emptyBlock[i].style.display='none'
  }
}
      
 
      

               
  
</script>
</body>
</html>