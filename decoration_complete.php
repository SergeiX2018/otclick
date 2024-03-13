


<?php
$vol_id = $_GET['id'];

// $db = mysqli_connect("localhost", "root", "", "vol_needy");
// $query = mysqli_query($db, "SELECT * FROM `applications` limit 1 WHERE `id`='$vol_id' ");
// $array = mysqli_fetch_array($query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/decoration_complete.css">
    <title>Завершение оформления заявки</title>
</head>
<body>
    
<?php
    require 'header.php';
    ?>

    <main>
        <div class="decoration_wrap">
            <h1 class="decoration_app-complete">Завершено!</h1>

            <?php
                            require 'configDB.php';
                                                        
                            
                            $query = $pdo->query('SELECT * FROM `applications` ORDER BY id_s DESC limit 1');
                                    
                                while($row = $query->fetch(PDO::FETCH_OBJ)) {
                                 
                                    $id_s=$row->id_s;
                                    

                                    ?>
                    





            <p class="decoration_app">Заявка оформлена: № <?php echo $id_s?></p>
            <?php
                                }
                                ?>
            <div class="btn_wrap">
                <a href="index.php" class="select_btn">Главная страница</a>
                <a href="office_needy.php" class="office_btn">Личный кабинет</a>
            </div>
        </div>
    </main>





    <?php
    require 'footer.php';
    ?>







</body>
</html>