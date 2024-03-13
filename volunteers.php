<?php
    $id_needy = $_POST['id'];
    echo $id_needy;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/volunteers.css">
    <title>Волонтеры</title>
</head>
<body>
   
    <?php
    require 'header.php';
    ?>

    <main>
        <div class="container">
            <section class="volunteers-card_container">
                <div class="volunteers">
                    <h1 class="volunters_header">Волонтеры</h1>
                   
                </div>
                <div class="filter_block">
                    <button class="filter-btn">Фильтр</button>
                </div>

                <form action="profile_volunteers.php?id=<?=$id ?>" class="form_volunteers">
                    <ul id="volunteers_list" class="volunteers_list">
                 
                        <?php
                            require 'configDB.php';
                                                            
                                $query = $pdo->query('SELECT * FROM `volunteers`');
                                        
                                    while($row = $query->fetch(PDO::FETCH_OBJ)) {
                                        $show_img = base64_encode($row->img);
                                        $id=$row->vol_id;
                                        ?>
                                            <li  class="volunteers_items">
                                                <input type="hidden" name="id_needy" value="<?php echo $id_needy; ?>">
                                                <a  href="profile_volunteers.php?id=<?=$id ?>"><img class="volunteers_img"  src="data:image/jpeg;base64, <?=$show_img ?>"  alt=""></a>
                                                <div class="stars_img-block">
                                                    <div class="stars_img">★</div>
                                                    <div class="stars_img">★</div>
                                                    <div class="stars_img">★</div>
                                                    <div class="stars_img">★</div>
                                                    <div class="stars_img">★</div>
                                                </div>
                                            </li>
                                <?php 
                                    
                                    
                                    
                                    }               
                        
                                ?>   
                   
                    </ul>
                </form>
                <div class="btn_wrap">
                    <button class="volunteers_btn">далее</button>
                </div>
            </section>
        </div>
    </main>
    <?php
    require 'footer.php';
    ?>
    <script src="scripts/help_people.js"></script>
</body>
</html>



