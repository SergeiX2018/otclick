<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/help_people.css">
    <title>Нуждающиеся</title>
</head>
<body>
<?php
    require 'header.php';
    ?>
    <main>
        <div class="container">
            <section class="volunteers-card_container">
                <div class="volunteers">
                        <h1 class="volunters_header">Люди которым можно помочь</h1>
                   
                </div>
                <div class="filter_block">
                    <button class="filter-btn">Фильтр</button>
                </div>
                <ul id="volunteers_list" class="volunteers_list">
                        <li class="volunteers_items">
                

                    
                   

                    <?php
                            require 'configDB.php';
                                                        
                            
                            $query = $pdo->query('SELECT * FROM `needy`');
                                    
                                while($row = $query->fetch(PDO::FETCH_OBJ)) {
                                    $show_img = base64_encode($row->img_needy);
                                    $id=$row->id;
                                    $info=$row->info;
                                    
                                    ?>
                                    <div class="card_block">
                                        <a class="n_img" href="profile_needy.php?id=<?=$id ?>"><img class="n_img"  src="data:image/jpeg;base64, <?=$show_img ?>"  alt="нуждающийся"></a>
                                        <p class="card_info"><?=$info ?></p>
                                    </div>
                                    
                                <?php

                                
                                  
                               
                              
                                
                            }
                 
                         ?>





                </ul>
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