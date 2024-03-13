

                        <?php
$user_id = $_GET['id'];


setcookie("user_id", $user_id, time()+3600,'/');

$user_id = $_COOKIE['user_id'];


// $vol_id = $_COOKIE['vol_id'];
// echo $vol_id;



// $mysql = new mysqli('localhost', 'root', '', 'vol_needy');
//  $mysql->query("INSERT INTO applications( `id`) VALUES ('$id')");

// echo $id_needy;




// $db = mysqli_connect("localhost", "root", "", "vol_needy");
// $query = mysqli_query($db, "SELECT * FROM `applications` WHERE `vol_id`='$vol_id'");
// $array = mysqli_fetch_array($query);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/new_application.css">
    <title>Новые заявки волонтера</title>
</head>
<body>
<?php
    require 'header.php';
    ?>
    
    <main>
        <div class="container">
            <section class="application_section-block">
                <h2 class="new-application_header">раздел новых заявок</h2>
                <form action="#" method="post">
                
                <ul class="application_sections-wrap">
                    
                <?php
                             

                             require 'configDB.php';
                                                   

                       $query = $pdo->query(" SELECT * FROM `applications`  JOIN needy ON  applications.needy_id= needy.id WHERE `vol_id`='$user_id'");
                       
                           while($row = $query->fetch(PDO::FETCH_OBJ)) {


                                $show_img = base64_encode($row->img_needy);
                             
                                $requirement=$row->requirement;
                          
                                $needy_id=  $row->needy_id;
                                 $vol_id = $row->vol_id;
                             
    
                             
                         

                                 $img= $row->img;
                                $currents_date=$row->currents_date;
                           
            
                                 $id_s=$row->id_s;
                       
                           ?>



            <li class="application_wrap-flex">
                             <img class="new-application_img" src="data:image/jpeg;base64, <?php echo $show_img ?>">
                     
                    <div class="new-applications_items">
                        <div class="application_text"><?php echo $requirement?></div>
                    </div>
                              

                    <div class="application_btn-flex">
                        <a href="delete.php?id=<?=$id_s?>"  id="<?php echo $id_s; ?>" class="new-application_btn help_img">помочь</a>
                      
                        <a href="dialogue_volunteers.php?id=<?=$id?>" class="new-application_btn write_btn">написать</a>
                           </div>
                           </li>
                           <script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>

  <script>

    

// let app_active=document.queryselector('#applications_active');






$(document).ready(function(){
    let test =1;
let requirement = '<?php echo $requirement; ?>';
let needy_id = '<?php echo $needy_id; ?>';
let vol_id = '<?php echo $vol_id; ?>';
let img =  '<?php echo $show_img; ?>';
let id_s =  '<?php echo $id_s; ?>';
let application_number =  '<?php echo $application_number; ?>';
let currents_date =  '<?php echo $currents_date; ?>';
        
    $('[id="<?php echo $id_s; ?>"]').on('click', function(e){
       alert("<?php echo $id_s; ?>")
    alert("<?php echo $currents_date; ?>")
    alert("<?php echo $application_number; ?>")
     

 $.ajax({
   url: "delete.php",
   datatype: "json",
   
//    async: true,
//    contentType: "application/json; charset=utf-8",
   method: "POST",
   data: { 
    
      requirement: requirement,
    img:img,
    id_s:id_s,
    needy_id:needy_id,
    vol_id:vol_id,
    currents_date:currents_date,
    application_number:application_number

   },
   success: function (data, textStatus) {
      alert(data)

   } 
})

})
})










  </script>

  <?php 
                                
                                                
                               
                              
                            };
                            
                                ?>








                       
                        
                    
                </ul>
                        
                        </form>
                <!-- <ul class="application_sections-wrap">
                    <li class="application_wrap-flex">
                        <div class="new-application_img"></div>
                    </li>
                    <li>
                        <div class="application_text">Нужно помочь сходить в магазин за продуктами</div>
                    </li>
                    <li class="application_wrap-flex">
                        <button  class="new-application_btn">помочь</button>
                        <button  class="new-application_btn">написать</button>
                    </li>
                </ul> -->

                   
            </section>
        </div>
    </main>
    <?php
    require 'footer.php';
    ?>








   
 
</body>
</html>