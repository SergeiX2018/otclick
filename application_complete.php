
<?php
$user_id = $_GET['id'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/application_complete.css">
    <title>Раздел завершенных заявок</title>
</head>
<body>
<?php
    require 'header.php';
?>
<main>
    <div class="container">
        <section class="application_section-block">
            <h2 class="new-application_header">раздел завершенных заявок</h2>
            <?php
                require 'configDB.php';                           
                    $query = $pdo->query(" SELECT * FROM `applications_complete`   WHERE `vol_id`='$user_id'");
                    
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
            <ul class="application_sections-wrap">
                <li class="application_wrap-flex">
                    <img class="new-application_img" src="data:image/jpeg;base64, <?php echo $img ?>">
                    <div class="application_text"><?php echo $requirement?></div>
                    <div class="application_btn-flex">
                        <button class="complete_btn">завершено</button>
                    
                    </div>
                </li>
                
            </ul>
            <?php
                };
            ?>
                
                
        </section>
    </div>
</main>
    <?php
         require 'footer.php';
    ?>
</body>
</html>

