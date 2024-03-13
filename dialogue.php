
<?php
$id = $_GET['id'];
$id_needy = $_GET['id_needy'];
echo $id_needy;

// $id_needy = $_COOKIE['id'];
// echo $id_needy;


$id_n= $id[0];
$id_v= $id[1];

echo $id;




// $db = mysqli_connect("localhost", "root", "", "vol_needy");
// $query = mysqli_query($db, "SELECT * FROM `dialogue_needy` WHERE `id_needy`='$id'");
// $array = mysqli_fetch_array($query);

// $query = mysqli_query($db, "SELECT * FROM dialogue_volunteers  WHERE id_needy IN ( SELECT id_needy FROM dialogue_volunteers  GROUP BY id_needy HAVING count(*) > 1 ) ORDER BY id_needy");

?>
<?php
$vol_id = $_GET['id'];

$db = mysqli_connect("localhost", "root", "", "vol_needy");
$query = mysqli_query($db, "SELECT * FROM `dialogue_volunteers` JOIN volunteers ON dialogue_volunteers.id_volunteer=volunteers.vol_id WHERE `id_volunteer`='$id[1]'");
$query_two = mysqli_query($db, "SELECT * FROM `dialogue_needy` JOIN needy ON dialogue_needy.id_needy=needy.id WHERE `id_needy`='$id[0]'");
$array = mysqli_fetch_array($query);
$array_two = mysqli_fetch_array($query_two);
$img= $array['img'];
$img_two=$array_two['img'];
$full_im=base64_encode($img);
$full_needy=base64_encode($img_two);
$p= $array['id_volunteer'];
echo $p;
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
                <button class="back_btn-item">Назад</button>
            </div>
              


            <section class="dialogue_section-block">
                <h2 class="dialogue_header">Диалог</h2>
                <?php
                if($_COOKIE['id']==$id_n){
                    echo '<form action="dialogue_processing_needy.php" class = "form_dialogue" method="post" name="dialogue_volunteer" enctype="multipart/form-data">';
                }
                else{
                    echo '<form action="dialogue_processing_volunteers.php" class = "form_dialogue" method="post" name="dialogue_volunteer" enctype="multipart/form-data">';
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
                                                        
                            
                            $query = $pdo->query("SELECT message_needy FROM `dialogue_volunteers` JOIN needy ON dialogue_volunteers.id_needy=needy.id ");
                
                                while($row = $query->fetch(PDO::FETCH_OBJ)) {
                                    $img= $row->img;
                           
                                    $full_img=base64_encode($img);
                                    $id=$row->vol_id;
                                    $m= $row->message_needy;
                                    $m=$row->message_volunteer;
                                    $id_volunteer=$row->id_volunteer;
                                  
                                    ?>



<input type="hidden" name="id_volunteer" value="<?php echo $id_volunteer; ?>">
<input type="hidden" name="id_v" value="<?php echo $id_v; ?>">
<input type="hidden" name="id_n" value="<?php echo $id_n; ?>">
<div class="textarea_dialogue-block" >
                                        <div class="img-text_wrap">
                                        <img src="data:image/jpeg;base64, <?=$full_img ?>" class="dialogue_img">
                                        <p class='message_text-'><?php echo  $m?></p>
                                        </div>
                                </div>
                        
                            
                                
                                <?php 
                                
                                
                               
                              
                                
                            }
                 
                         ?>










                               
                                
                              
                        </div>
                
                </div>
                
                        <div class="write_dialogue-block">
                                    <input class='white_input' type="text" placeholder="Напишите сообщение..." name="message_volunteer">
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




<script>

    let btn = document.querySelector('.dialogue_btn-send')
    let block_dialogue =[...document.querySelectorAll('.textarea_dialogue-block')];
    let items=[...document.querySelectorAll('.textarea_dialogue-block div')]; 
    let f =document.querySelector('.dialogue_textarea-block')
   
    let arr=[]

    

       var x=0;
       
       for(let i=0; i<block_dialogue.length; i++){
           block_dialogue[i].setAttribute('id', i);
           arr.push(block_dialogue[i])



    }

    console.log(arr)
    btn.addEventListener('click', function(e){
            x++;
        
       
      
    console.log(block_dialogue) 
      
      
           
           
      
      
    }
          
        
      
    
    
        
  
)
</script>
</body>
</html>