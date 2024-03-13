<?php
$user_id = $_GET['id'];

$vol_id = $_COOKIE['vol_id'];

$id_s = $_COOKIE['id_s'];

setcookie("user_id", $user_id, time()+3600,'/');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/applications_active.css">
    <title>Раздел активных заявок</title>
</head>
<body>
<?php
    require 'header.php';
    ?>
    <main>
        <div class="container">
            <section class="application_section-block">
                <h2 class="new-application_header">раздел активных заявок</h2>
                <form action="delete_active.php" method="post">
                <ul class="application_sections-wrap">
                <input type="hidden" name="vol_id" value="<?php echo $vol_id; ?>">
                    <?php
                             

                             require 'configDB.php';
                                                   

                       $query = $pdo->query(" SELECT * FROM `applications_active`   WHERE `vol_id`='$user_id'");
                       
                           while($row = $query->fetch(PDO::FETCH_OBJ)) {
                                $show_img = base64_encode($row->img);
                                $id=$row->id;
                                $requirement=$row->requirement;
                                $fio= $row->fio;
                                $date= $row->date;
                             
                             
                              $city= $row->city;
                              $address= $row->address;
                              $phone= $row->phone;
                              $email= $row->email;
                              $info= $row->info;
                            $needy_id=$row->needy_id;
                            $vol_id=$row->vol_id;

                              $img= $row->img;
                                
                           $d1 = date('Y', strtotime($date)); 
                           $d2 = date("Y"); 
                           $full_date=$d2-$d1;
                           ?>



                    <li class="application_wrap-flex">
 
                            <img class="new-application_img" src="data:image/jpeg;base64, <?php echo $img ?>">
          
                    <div class="new-applications_items">
                        <div class="application_text"><?php echo $requirement?></div>
                           </div>
                               

                    <div class="application_btn-flex">
                        <a href="application_active.php?id=<?php echo $needy_id?>"  class="active_btn clock_img">активно</a>
                        
                        <a href="delete_active.php?id=<?=$id?>"  id="<?php echo $id; ?>"  class="complete_btn complete_img">завершить</a>
                           </div>

                    </li>


                    <script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>

  <script>

    

$(document).ready(function(){
    let test =1;
let requirement = '<?php echo $requirement; ?>';
let needy_id = '<?php echo $needy_id; ?>';
let vol_id = '<?php echo $vol_id; ?>';
let img =  '<?php echo $img; ?>';
let id =  '<?php echo $id; ?>';
        
    $('[id="<?php echo $id; ?>"]').on('click', function(e){
       alert("<?php echo $id; ?>")
    alert("<?php echo $img; ?>")
     

 $.ajax({
   url: "delete_active.php?ID=11",
   datatype: "json",
   
//    async: true,
//    contentType: "application/json; charset=utf-8",
   method: "POST",
   data: { 
    
      requirement: requirement,
    img:img,
    id:id,
    needy_id:needy_id,
    vol_id:vol_id

   },
   success: function (data, textStatus) {
    alert($data);

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
               

               

                   
            </section>
        </div>
    </main>
    <?php
    require 'footer.php';
    ?>


    
</body>
</html>