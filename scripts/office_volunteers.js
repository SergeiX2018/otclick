let saveBtn=document.querySelector('#save');
let img_profile=document.querySelector('#img_profile');
let text_img=document.querySelector('#text');
let contactsBlock=document.querySelectorAll('#contacts_block');
let contacts_edit_block=document.querySelectorAll('#contacts_edit-block');
let file_domload=document.querySelector('.input_domload');
let helpPeople=document.getElementById('help-people');
let formOptions=document.querySelector('#volonteers-dic_data-list');
let optionInput=document.querySelectorAll('.option_input')
let load_imgInsert=document.querySelector('#volonteers_load-img')
// let input_domload=document.querySelector('#input_domload').files[0]
let inputd_domload=document.querySelector('#input_domload')
let applicationList=document.querySelectorAll('.application_list')[0]
let clear = document.querySelector('#clear')
let editBtn = document.querySelector('#edit_btn')
let text_hover=document.querySelector('.textarea_hover')
let optionsUser=[]
editBtn.addEventListener('click',function(e){
    contactsBlock.forEach((item) => item.style.display='none')
    contacts_edit_block.forEach((item_edit) => item_edit.style.display='block')
    editBtn.style.display='none'
    saveBtn.style.display='block'
    file_domload.style.display='block'
    img_profile.style.display='none'
    img_user.style.display='block'
    text_img.style.display='block'
    
})
saveBtn.addEventListener('click',function(e){
    contactsBlock.forEach((item) => item.style.display='block')
    contacts_edit_block.forEach((item_edit) => item_edit.style.display='none')
    editBtn.style.display='block'
    saveBtn.style.display='none'
    file_domload.style.display='none'
})

function readFile(input) {
  
    let file = input.files[0];
    
  
    let reader = new FileReader();
   
    
  
    reader.readAsDataURL(file);
    let img = document.createElement('img')
    
    reader.onload = function() {
        img_profile.style.display='none'
        img.src= reader.result;
        img.className='img_volunteer'
        img.id='img_profile'
     
        img.style.borderRadius = '20px';
        img.style.backgroundSize='contein';
        
        load_imgInsert.append(img)
        
    };
}


file_domload.addEventListener('click',function(e){
    let count=0;
    if(load_imgInsert.lastChild&&count==0){

        load_imgInsert.lastChild.remove();
        count++
    }
    else{
        count--
       
    }
})


let arr;

let reviews_img=document.querySelector('.reviews_list')
console.log(reviews_img)
reviews_img.addEventListener('mouseover', function(e){
let target=e.target;
console.log(target)
    if(target.id=='img_three'){
        text_hover.innerHTML='Доброжелательный и активный волонтер. Рекомендую.'
    }
     if(target.id=='img_four'){
        text_hover.innerHTML='Очень общительный и интересный собеседник'
    }
    if(target.id=='img_five'){
        text_hover.innerHTML='Очень часто опаздывает'
    }
    if(target.id=='img_seven'){
        text_hover.innerHTML='Трудно дозвониться до волонтера.'

    }
})

function OptionUser(surname, name, patronymic, age, city, address, number, email, aboutMe){
    this.surname=surname;
    this.name=name;
    this.patronymic=patronymic;
    this.age=age;
    this.city=city;
    this.address=address;
     this.number=number;
     this.email=email;
    this.aboutMe=aboutMe;
    
   
 }
    let users=new OptionUser();
    
    
function readFile(input) {
  
    let file = input.files[0];
    
  
    let reader = new FileReader();
   
    
  
    reader.readAsDataURL(file);
    let img = document.createElement('img')
    
    reader.onload = function() {
       
        img.src= reader.result;
        img.className='img_volunteer'
        img.id='img_profile'
     
        img.style.borderRadius = '20px';
        img.style.backgroundSize='contein';
        
        load_imgInsert.append(img)
        
    };
}

img_user.addEventListener('click', function(){
    console.log(1)
})
