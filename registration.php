
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style/registration.css">
    
    <title>Регистрация</title>
</head>
<body>

<?php
    require 'header.php';
?>
<main>
    <div class="container">
        <section class="section-registration_wrap">
            <h2 class="registration_header">Регистрация как волонтер</h2>
            <div class="registration">
            
                <form id="form" action="check.php" name="form" method="post"  enctype="multipart/form-data">

                    <div class="form-descriptions_wrapper">
                        
                        <div class="form-group_block-data">
                            
                            <div class="form-group_block">
                                <div class="img-block">
                                <input type="file"  name="img_upload" class="input_domload"   id="input_domload" onchange="readFile(this)">
                                    <div class="registration-img_block" id="registration-img_block">Загрузите ваше фото</div>
                                    <div class="input_block-img">
                                        <input type="reset" value="очистить" class="clear" id="clear"> 
                                    </div>
                                </div>
                                    
                                <div class="info_block">
                                    <h3 class="field_header">заполните все обязательные поля</h3>
                                    <div class="fio_block" id="fio_block">
                                        <div class="before_star-block">
                                            <input pattern="[А-Яа-я]{2,}\s[А-Яа-я]{2,}\s[А-Яа-я]{2,}"   required class="input_items  before_star"  title="Фамилия, Имя и Отчество с заглавной буквы" type="text" id="fio_vol" placeholder="фамилия Имя Отчество" name="fio_vol">
                                        </div>
                                        
                                    
                                    </div> 
                                    <div class="items_info-block">
                                        <input type="text"   id="date"  class='input_items' required placeholder="дата рождения 00.00.0000" onfocus="(this.type='date')" name="date_vol" onblur="if(this.value==''){this.type='text'}">
                                    </div>
                                    <div  id="gender" class="gender_block">
                                        <p class="male">
                                            <label for="male" id="label_male" class="gender_check-male">мужской</label>
                                            
                                            
                                            <input id="male" type="radio" name="gender_vol" value="мужской" class="gender_male_change-color">
                                        </p>
                                        <p class="femimine">
                                        <label for="feminine" id="label_feminine" class="gender_check-feminine">женский</label>
                                    
                                        <input id="feminine" type="radio" name="gender_vol" value="женский">
                                        
                                        </p>
                                        
                                    </div>
                                    <div class="items_info-block">
                                        <input required class="input_items" type="text"  id="city" placeholder="город проживания" name="city_vol">
                                    </div>
                                    <div class="address_block">
                                        <input  class="input_items"   id="address" type="text" placeholder="фактический адрес проживания" name="address_vol">
                                    </div> 
                                        <div class="items_info-block">
                                        <input  class="input_items"   pattern="^([9]{1}[0-9]{9})?$" title="Введите 10 значное число. Первая цифра начинается с 9" id="phone" required type="tel" placeholder="контактный номер телефона" name="phone_vol">
                                    </div>
                                    <div class="email_block">
                                        <input  class="input_items" id="email"  required type="email" placeholder="электронная почта" name="email_vol">
                                    </div>
                                    <div class="items_info-block">
                                        <input  class="input_items"  type="password" required  id="password" placeholder="пароль" name="password_vol">

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-info_block">
                            <textarea class="textarea_registration" name="info_vol" id="info" placeholder="дополнительная информация в чем вы нуждаетесь" name="info_vol"></textarea>
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
<script>
 let input=document.querySelectorAll('input')
 let form=document.querySelector('form')
 let button=document.getElementsByTagName('button')[0]
 let vol1=document.getElementsByClassName('volunteers_img')[0]
let gender=document.querySelectorAll('#gender input');
 let date=document.querySelector('#date');
 let load_imgInsert=document.querySelector('#registration-img_block')
let input_domload=document.querySelector('#input_domload').files[0]
let inputd_domload=document.querySelector('#input_domload')
let applicationList=document.querySelectorAll('.application_list')[0]
let clear = document.querySelector('#clear')
let img_user=document.querySelector('#registration-img_block')
let label_male=document.querySelector('#label_male')
let label_feminine=document.querySelector('#label_feminine')
let imgUser=document.querySelector('#img_user');

console.log(load_imgInsert)
 
 for (let i=0 ; i<gender.length; i++) {
    gender[i].addEventListener("click", function(e){
        let target=e.target;
            let count=0;
        if(target.id=='male'){
        
            label_feminine.classList.remove('gender_feminine_change-color')
            label_male.classList.remove('gender_check-male')
            label_male.classList.add('gender_male_change-color')
            label_feminine.classList.add('gender_check-feminine')
            man.btn_m_check=true;
            console.log(man.btn_m_check)

        }

       if(target.id=='feminine'){
            label_feminine.classList.remove('gender_check-feminine')
            label_feminine.classList.add('gender_feminine_change-color')
            label_male.classList.add('gender_check-male')
            women.btn_w_check=true;
    
        }

        else{
            man.btn_m_check=false; 
            women.btn_w_check=false;
        }
    
    });
  }

  
 
 let manArray=[];

 function readFile(input) {
  
    let file = input.files[0];
    
  
    let reader = new FileReader();
  
    reader.readAsDataURL(file);
    let img = document.createElement('img')
    
    reader.onload = function() {
       
        img.src= reader.result;
        img.className='img_registration';
        img.id='img_user';
        
        load_imgInsert.append(img)
        
        localStorage.setItem("img", reader.result)
       
        
        console.log(file)

    };

        
    
}

console.log(load_imgInsert)
clear.addEventListener('click', function() {
    if(load_imgInsert.firstChild){
        load_imgInsert.firstChild.remove();
    }

  
})
console.log(img_user)
img_user.addEventListener('click', function(){
console.log(1)
})
inputd_domload.addEventListener('click', function(e) {
let target =e.target;

console.log(target)
let count=0;
if(load_imgInsert.firstChild&&count==0){
    load_imgInsert.firstChild.remove();
    count++
}
else{
    count--
   
}

  
})
console.log(manArray)




function Users(fio, date, btn_m_check, btn_w_check,  address, phone, email,password,info){
   this.fio=fio;
   this.date=date;
   this.btn_m_check=btn_m_check;
   this.btn_w_check=btn_w_check;
   this.address=address;
   this.phone=phone;
   this.email=email;
   this.password=password;
   this.info=info;
   
}

   let man=new Users();
   let women=new Users();
    


form.addEventListener('change', function(e) {
    
   let target=e.target;
  console.log(target)
   
   let fio =target.pattern;
   let fioReg= new RegExp(fio)


   let phone=target.pattern;
   let phoneReg=new RegExp(phone)
   let date =target.pattern;
   let dateReg=new RegExp(date)

   
   let email= /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    let emailReg=new RegExp(email)

    let password=target.pattern;
    let passwordReg=new RegExp(password)
    

       if(target.id=='fio'&&fioReg.test(target.value)){
           man.fio=target.value;
       }
    
       if(target.id=='fio'&&fioReg.test(target.value)){
            women.fio=target.value;
       }
       
       if(target.id=='date'){
        console.log(target.value)
        man.date=target.value;
        
    }

        if(target.id=='date'){
            women.date=target.value;
    
        }
        
        if(man.btn_m_check==true){
            man.btn_m_check=target.value
        }
        if(women.btn_m_check==true){
            man.btn_m_check=target.value
        }

        if(target.id=='city'){
            man.city=target.value;
            
        }
        if(target.id=='city'){
            women.city=target.value;
        
        }
        if(target.id=='address'){
            man.address=target.value;
            
        }
        if(target.id=='address'){
            man.address=target.value;
            
        }
      
        if(target.id=='phone'&&phoneReg.test(target.value)){
            man.phone=target.value;
            
        }
        if(target.id=='dte'&&dateReg.test(target.value)){
            man.date=target.value;
            
        }
        if(target.id=='phone'&&phoneReg.test(target.value)){
            women.phone=target.value;
        
        }
        if(target.id=='email'&&emailReg.test(target.value)){
            man.email=target.value;
        
        }
        if(target.id=='email'&&emailReg.test(target.value)){
            women.email=target.value;
            
        }
        if(target.id=='password'&&passwordReg.test(target.value)){
            man.password=target.value;
            
        }
        if(target.id=='password'&&passwordReg.test(target.value)){
            women.password=target.value;
            
        }
        
        if(target.id=='info'){
            man.info=target.value;
            
        }
        if(target.id=='info'){
            women.info=target.value;
        
        }

      
    console.log(man)
        
    


       










        
      
    
        manArray.push(man)
       console.log(manArray)
   
      
        
       

   })

   
  


  
// button.addEventListener('click', function(e) {
//     e.preventDefault()
//      document.location.href = "office_volunteer.html";
//     if(load_imgInsert.firstChild){
//         man.img=load_imgInsert.firstChild.getAttribute('src');
        
//     }
    
//     // if(man.btn_m_check==undefined){
//     //     alert('заполните поля формы')
//     //    }
//     //    else{
//     //     document.location.href = "office_volunteer.html";
//     //    }
       
     
//        let users = [];
//        if (localStorage.getItem('man'))
//          users = JSON.parse(localStorage.getItem('man'))  
//         localStorage.manArray = JSON.stringify(manArray);
//         manArray = JSON.parse(localStorage.manArray);
        
       
   
//         localStorage.setItem('storedUsers', JSON.stringify(users));

         
         
//    })



   
// const imgPath = document.querySelector('input[type=file]').files[0];
// const reader = new FileReader();

    </script>
</body>
</html>