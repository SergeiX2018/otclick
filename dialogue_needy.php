<?php
$id = $_GET['id'];

$id_n= $id[0];
$id_v= $id[1];
echo $id_n;

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
$current_dates= $array['current_dates'];
$current_times=$row->current_times;

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
            
                <button class="back_btn-item">Назад</button>
            </div>
              
            <section class="dialogue_section-block">
                <h2 class="dialogue_header">Диалог</h2>
                <form action="dialogue_processing_needy.php" class = 'form_dialogue' method="post" name="dialogue_volunteer" enctype="multipart/form-data">
                <input type="hidden" name="id_n" value="<?php echo $id_n; ?>">
                <input type="hidden" name="id_v" value="<?php echo $id_v; ?>">
               
               
                    <div class="flex-group">
                    <div class="img_flex-group">
                     <img src="data:image/jpeg;base64, <?=$full_im?>" class="dialogue_persone" alt="" >
                     <img src="data:image/jpeg;base64, <?=$full_needy?>" class="dialogue_persone needy" alt="">
                    </div>
                    <div class="dialogue_textarea-block">
                    <?php
                            require 'configDB.php';
                                                        
                            
                            $query = $pdo->query("SELECT * FROM `dialogue_volunteers` JOIN needy ON dialogue_volunteers.id_needy=needy.id ");
                    
                                while($row = $query->fetch(PDO::FETCH_OBJ)) {
                                    $img= $row->img;
                           
                                    $full_img=base64_encode($img);
                                    $id=$row->vol_id;
                                    $message_needy= $row->message_needy;
                                    $m=$row->message_volunteer;
                                    $id_volunteer=$row->id_volunteer;
                                    $current_dates=$row->current_dates;
                                    $current_times=$row->current_times;
                                  
                                    ?>

                                        <input type="hidden" name="id_volunteer" value="<?php echo $id_volunteer; ?>">
                                        <div class="textarea_dialogue-block">
                                        <div class="img-text_wrap">
                                        <div class="img-date_group">
                                                <p class="current-date"><?php echo  $current_dates?></p>
                                        <img src="data:image/jpeg;base64, <?=$full_img ?>" class="dialogue_img">
                                </div>
                                <div class="time-text-content_block">
                                            <p class="current-time"><?php echo  $current_times?></p>
                                        <p class='message_text-needy'><?php echo  $message_needy?></p>
                                </div>
                                        </div>
                                        
                                </div>
                        
                                <?php 
                        
                                
                            }
                 
                         ?>    
                              
                        </div>
                
                </div>
                
                        <div class="write_dialogue-block">
                                    <input class='white_input' type="text" placeholder="Напишите сообщение..." name="message_needy">
                                    <input type="submit" class="dialogue_btn-send">
                            </div> 
                    </div>
                </form>
            </section>
        </div>
    </main>
    <?php
    require 'footer.php';
    ?>
</body>
</html>