<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style/registration_needy.css">
    
    <title>Регистрация нуждающегося</title>
</head>
<body>
<?php
    require 'header.php';
    ?>
    <main>
        <div class="container">
            <section class="section-registration_wrap">
                <h2 class="registration_header">Регистрация как нуждающийся</h2>
                <div class="registration">
                
                    <form id="form" action="check_two.php" name="form" method="post" enctype="multipart/form-data">
                    
                        <div class="form-descriptions_wrapper">
                            
                            <div class="form-group_block-data">
                               
                                <div class="form-group_block">
                                    <div class="img-block">
                                        <div class="registration-img_block" id="registration-img_block">Загрузите ваше фото</div>
                                        <div class="input_block-img">
                                        <input type="file"  name="img_upload" class="input_domload"   id="input_domload" onchange="readFile(this)">
                                            <input type="reset" value="очистить" class="clear" id="clear">
                                
                                        </div>
                                    </div>
                                    
                                        
                                    <div class="info_block">
                                        <h3 class="field_header">заполните все обязательные поля</h3>
                                        <div class="fio_block" id="fio_block">
                                            <div class="before_star-block">
                                                <input pattern="[А-Яа-я]{2,}\s[А-Яа-я]{2,}\s[А-Яа-я]{2,}"   required class="input_items  before_star"  title="Фамилия, Имя и Отчество с заглавной буквы" type="text" id="fio" placeholder="фамилия Имя Отчество" name="fio">
                                            </div>
                                           
                                        
                                        </div> 
                                        <div class="items_info-block">
                                            <input type="text"  name="date" id="date"  class='input_items' required placeholder="дата рождения 00.00.0000" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}">
                                        </div>
                                        <div  id="gender" class="gender_block">
                                            <p class="male">
                                                <label for="male" id="label_male" class="gender_check-male">мужской</label>
                                               
                                                
                                                <input id="male" type="radio" name="gender" value="мужской" class="gender_male_change-color">
                                            </p>
                                           <p class="femimine">
                                            <label for="feminine" id="label_feminine" class="gender_check-feminine">женский</label>
                                        
                                            <input id="feminine" type="radio" name="gender" value="женский">
                                           
                                           </p>
                                            
                                        </div>
                                        <div class="items_info-block">
                                            <input required class="input_items" type="text"  id="city" name="city"   placeholder="город проживания">
                                        </div>
                                        <div class="address_block">
                                            <input  class="input_items"   id="address" type="text" name="address" placeholder="фактический адрес проживания">
                                        </div> 
                                         <div class="items_info-block">
                                            <input  class="input_items" name="phone"  pattern="^([9]{1}[0-9]{9})?$" title="Введите 10 значное число. Первая цифра начинается с 9" id="phone" required type="tel" placeholder="контактный номер телефона">
                                        </div>
                                        <div class="email_block">
                                            <input  class="input_items" id="email" name="email"  required type="email" placeholder="электронная почта">
                                        </div>
                                        <div class="items_info-block">
                                            <input  class="input_items" name="password" type="password" required  id="password" placeholder="пароль">

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-info_block">
                                <textarea class="textarea_registration" name="info" id="info" placeholder="В чем вы нуждаетессь:"></textarea>
                            </div> 
                            <div class="personal-info_wrap">
                                <input type="radio" class="radio_info"  id="personal-info">
                                <label class="personal-info" for="personal-info"><span class="personal-info_text">Соглашаюсь на</span> <span class="text_color">обработку моих персональных данных,</span><span class="personal-info_text">c</span><span class="text_color"> правилами пользования сайтом</span><span class="personal-info_text"> и принимаю</span><span class="text_color"> Пользовательское соглашение</span></span></label>
                                   
                                
                            </div>
                            <div class="registration_btn-block">
                                <button class="registration_btn" type="submit">зарегистрироваться</button>
                            </div>
                            
                            
                        </div> 
                    </form>
                </div>
            </section>
        </div>
    </main>
    <?php
        require 'footer.php';
    ?>
    <script src="scripts/registration_needy.js"></script>
</body>
</html>