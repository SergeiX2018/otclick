
<?php
$id = $_GET['id'];

$db = mysqli_connect("localhost", "root", "", "vol_needy");
$query = mysqli_query($db, "SELECT * FROM `events` WHERE `id`='$id'");
$array = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/eevents.css">
    <title>Мероприятия</title>
</head>
<body>
<?php
    require 'header.php';
    ?>
    <main>
        <div class="container">
            <section>
                <h2 class="events_header">Мероприятия</h2>
                <ul class="events_list">

                <?php
                            require 'configDB.php';
                                                        
                            
                            $query = $pdo->query('SELECT * FROM `events`');
                                    
                                while($row = $query->fetch(PDO::FETCH_OBJ)) {
                                    
                                    $id=$row->id;
                                    $name=$row->name;
                                    $img=$row->image;
                                    $img = base64_encode($row->image);
                                    
                                    ?>
                                   <li>
                                        
                                        <img src="data:image/jpeg;base64, <?=$img?>" class="events_one-img">
                                        <h3 class="events_text"><?=$name?></h3>
                                        <a class="visit_btn" id="shelters" href="info_events.php?id=<?=$id ?>">участвовать</a>
                                        </li>
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
</body>
</html>