let saveBtn=document.querySelector('#save');
let editBtn = document.querySelector('#edit_btn')
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
 
 let manArrayOne=[];



 function readFile(input) {
  
    let file = input.files[0];
    
  
    let reader = new FileReader();
   
    
  
    reader.readAsDataURL(file);
    let img = document.createElement('img')
    
    reader.onload = function() {
       
        img.src= reader.result;
      
        img.style.backgroundSize='contein';
        img.id='img_user';
        img.className='img_registration';
        
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





function UsersOne(fio, date, btn_m_check, btn_w_check,  address, phone, email,password,info){
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
   let man=new UsersOne();
   let women=new UsersOne();
    


form.addEventListener('change', function(e) {
    e.preventDefault();
   let target=e.target;
  console.log(target)
   
   let fio =target.pattern;
   let fioReg= new RegExp(fio)


   let phone=target.pattern;
   let phoneReg=new RegExp(phone)
   let date =target.pattern;
   let dateReg=new RegExp(date)

//    let city= /^[а-яё][а-яё-]+[а-яё]$/
   
//    let cityReg=new RegExp(city)
   
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

      
     

   })

   
  


  
