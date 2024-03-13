<header>
        <div class="container">
            <div class="header-wrap">
                <div class="search-logo_wrap">
                    
                    <div class="logo_wrap">
                        <div class="logo logo_top">
                            <a href="index.php">
                                <img src="img/logo_two.png" class='logo_img' alt="логотип">
                            </a>
                        </div>
                    </div>
                    
                </div>
                <?php



                    if($_COOKIE['volunteer'] =='' AND $_COOKIE['needy']=='' ) :
                       


                ?>
                    <div class="right_group-block">
                    <div class="reg-auth_btn-block">
                    
                        <a class="reg_items" href="authorization.php" id="auth">Войти</a>
                
                    
                        <a class='reg_items-no-svg' id="reg" href="select_registration.php">регистрация</a>
                    
                </div>
                
                
                   
                
                <?php elseif($_COOKIE['volunteer']):
                
                    
                    
                    ?>
                    <div class="right_group-block">
                    <div class="office-exit_btn-block">
                        
                        <a class="office_items" href="office_volunteer.php?id=<?php echo $id?>">личный кабинет</a>
                
                    
                        <a class="exit_items" href="exit.php">выйти</a>
                    </div>

                    <?php elseif($_COOKIE['needy']):
                
                    
                    
                ?>
                <div class="right_group-block">
                <div class="office-exit_btn-block">
                    
                    <a class="office_items" href="office_needy.php?id=<?php echo $id?>">личный кабинет</a>
            
                
                    <a class="exit_items" href="exit.php">выйти</a>
                </div>
                <?php endif;?>
                
               
                
                </div>
            
            </div>  
        </div>
    </header>
