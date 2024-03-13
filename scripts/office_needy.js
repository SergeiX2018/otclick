let saveBtn=document.querySelector('#save');
let text_img=document.querySelector('#text');
let img_profile=document.querySelector('#img_profile');
let helpPeopleOne=document.getElementById('help-people');
let formOptions=document.querySelector('#volonteers-dic_data-list');
let img_user=document.querySelector('#volonteers_load-img');
let optionInput=document.querySelectorAll('.option_input')
let contactsBlock=document.querySelectorAll('#contacts_block');
contacts_edit_block=document.querySelectorAll('#contacts_edit-block');
let file_domload=document.querySelector('.input_domload');
let optionInputOne=document.querySelectorAll('.option_input');
let load_imgInsert=document.querySelector('#volonteers_load-img')
let inputd_domload=document.querySelector('#input_domload');
let applicationList=document.querySelectorAll('.application_list')[0]
let clear = document.querySelector('#clear');
let editBtn = document.querySelector('#edit_btn');
let text_hover=document.querySelector('.textarea_hover');
let optionsUser=[]
let arr;



function OptionUserOne(surname, name, patronymic, age, city, address, number, email, aboutMe){
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



 editBtn.addEventListener('click',function(e){
    contactsBlock.forEach((item) => item.style.display='none')
    contacts_edit_block.forEach((item_edit) => item_edit.style.display='block')
    editBtn.style.display='none'
    saveBtn.style.display='block'
    file_domload.style.display='block'
    img_profile.style.display='none'
    text_img.style.display='block'
    
})
saveBtn.addEventListener('click',function(e){
    contactsBlock.forEach((item) => item.style.display='block')
    contacts_edit_block.forEach((item_edit) => item_edit.style.display='none')
    editBtn.style.display='block'
    saveBtn.style.display='none'
    file_domload.style.display='none'
})

    let usersOne=new OptionUserOne();
    

    // manArrayOne = JSON.parse(localStorage.manArrayOne);  

    // manArrayOne=manArrayOne[manArrayOne.length-1]

    


    var now = new Date(); 
var today = new Date(now.getFullYear(), now.getMonth(), now.getDate()); //Текущя дата без времени

// let date= manArrayOne.date.replaceAll('-', ',')
// var dob = new Date(date); 
// console.log(dob)

// console.log(date)
// var dobnow = new Date(today.getFullYear(), dob.getMonth(), dob.getDate()); //ДР в текущем году
// var age; 


// age = today.getFullYear() - dob.getFullYear();

// if (today < dobnow) {
//   age = age-1;
// }


// let fio=manArrayOne.fio;

// let fioarr=fio.split(' ')



//     optionInputOne[0].outerHTML = `<p class='option_input-add'>Фамилия: ${fioarr[0] || ''}</p>`;
//     optionInputOne[1].outerHTML = `<p class='option_input-add'>Имя: ${fioarr[1] || ''}</p>`;
//     optionInputOne[2].outerHTML = `<p class='option_input-add'>Отчество: ${fioarr[2] || ''}</p>`;
//     optionInputOne[3].outerHTML = `<p class='option_input-add'>Возраст: ${age || ''}</p>`;
//     optionInputOne[4].outerHTML = `<p class='option_input-add'>Город: ${manArrayOne.city || ''}</p>`;
//     optionInputOne[5].outerHTML = `<p class='option_input-add'>Адрес: ${manArrayOne.address || ''}</p>`;
//     optionInputOne[6].outerHTML = `<p class='option_input-add'>Телефон: ${manArrayOne.phone || ''}</p>`;
//     optionInputOne[7].outerHTML = `<p class='option_input-add'>Почта: ${manArrayOne.email || ''}</p>`;
//     optionInputOne[8].outerHTML = `<p class='option_textarea option_input-add'>Дополнительная информация: ${manArrayOne.info || ''}</p>`;
//     img_user.outerHTML=`<div class="volonteers-dic_img"  id="volonteers_load-img"><img  src=${manArrayOne.img} class='img'></div>`

    
formOptions.addEventListener('change', function(e){
    e.preventDefault()
    let target=e.target;
   
    if(target.id=='surname'){
        usersOne.surname=target.value;

    }
   
   
   else if(target.id=='name'){
        usersOne.name=target.value;

    }
    else if(target.id=='patronymic'){
        usersOne.patronymic=target.value;

    }

    else if(target.id=='age'){
        
        usersOne.age=target.value;
    }

    else if(target.id=='city'){
        
        usersOne.city=target.value;
    }
    else if(target.id=='address'){
        
        users.address=target.value;
     
    }
     else if(target.id=='number'){
        usersOne.number=target.value;

    }
    else if(target.id=='email'){
        usersOne.email=target.value;

    }

    else if(target.id=='about-me'){
        usersOne.aboutMe=target.value;
    }
   
    

})

// saveBtn.addEventListener('click', function(e) {
//    e.preventDefault()
//     let target=e.target;
//     optionsUser.push(users)

     
//          optionInput[0].outerHTML = `<p class='option_input-add'>Фамилия: ${users.surname  || ''}</p>`;
//          optionInput[1].outerHTML =  `<p class='option_input-add'>Имя: ${users.name || ''}</p>`;

//          optionInput[2].outerHTML = `<p class='option_input-add'>Отчество: ${users.patronymic || ''}</p>`;
//          optionInput[3].outerHTML = `<p class='option_input-add'>Возраст: ${users.age || ''}</p>`;
//          optionInput[4].outerHTML = `<p class='option_input-add'>Город: ${users.city || ''}</p>`;
//          optionInput[5].outerHTML = `<p class='option_input-add'>Адрес: ${users.address || ''}</p>`;
       

//          optionInput[6].outerHTML = `<p class='option_input-add'>Телефон: ${users.number || ''}</p>`;
//          optionInput[7].outerHTML = `<p class='option_input-add'>Почта: ${users.email || ''}</p>`;
//          optionInput[8].outerHTML = `<p class='option_textarea option_input-add'>Дополнительная информация: ${users.aboutMe || ''}</p>`;
       
        

//     localStorage.OptionUser = JSON.stringify(optionsUser);
//     // optionsUser = JSON.parse(localStorage.optionsUser);  
//     saveBtn.style.display='none';
//     inputd_domload.style.display='none';
//     clear.style.display='none';
    
// })


    
    
function readFile(input) {
  
    let file = input.files[0];
    
  
    let reader = new FileReader();
   
    
  
    reader.readAsDataURL(file);
    let img = document.createElement('img')
    
    reader.onload = function() {
       
        img.src= reader.result;
        img.className='img_needy'
        img.style.backgroundSize='contein';
        
        load_imgInsert.append(img)
        
    };
}


editBtn.addEventListener('click', function(e){
  editBtn.style.display='none';
  saveBtn.style.display='block';
  console.log(optionInput[0])
})


file_domload.addEventListener('click',function(e){
    if(load_imgInsert.lastChild){
     load_imgInsert.lastChild.remove();
         text_img.style.display='none'
            
               
    }
 })