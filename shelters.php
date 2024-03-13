<?php

$id = $_GET['id'];
$db = mysqli_connect("localhost", "root", "", "vol_needy");
$query = mysqli_query($db, "SELECT * FROM `shelters` WHERE `id`='$id'");
$array = mysqli_fetch_array($query);
echo $id;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/shelters.css">
    <title>Приюты</title>
</head>
<body>
<?php
    require 'header.php';
?>
<main>

    <div class="container">
        <section>
            <h2 class="shelters_header">Приюты домашних животных</h2>
            <ul class="shelters_list">
            
                    <?php
                        require 'configDB.php';
                                                    
                        $query = $pdo->query('SELECT * FROM `shelters`');
                                
                            while($row = $query->fetch(PDO::FETCH_OBJ)) {
                                
                                $id=$row->id;
                                $name=$row->name;
                                $img=$row->image;
                                $img = base64_encode($row->image);
                                
                    ?>
                                 <li>
                                    <img src="data:image/jpeg;base64, <?=$img?>" class = "shelters_waii-img">
                                    <h3 class="shelters_name"><?=$name?></h3>
                                    <a class="visit_btn" id="shelters" href="info_shelters.php?id=<?=$id ?>">посетить</a>
                                </li>
                            
                            <?php  
                            
                                 }
                
                             ?>

            </ul>
        </section>
    </div>
</main>
<?php
require 'footer.php';
?>
    <script>
        let shelters=document.querySelectorAll('.shelters_list li')[0]
        shelters.addEventListener('click', function(e){
            let target=e.target;
            if(target.id=='shelters'){
                window.location.href = 'info_shelters.html';
            }
        })
    </script>
</body>
</html>