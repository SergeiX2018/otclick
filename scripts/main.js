
let menuElem = document.getElementById('sweeties');
let titleElem = menuElem.querySelector('.title');
    let nav= document.querySelector('.nav_list')

    let regAuthGroup=document.querySelectorAll('.btn_registration-block')[0]
    let openGroup=document.querySelectorAll('.btn_registration-block')[0]
    


titleElem.onclick = function() {
  menuElem.classList.toggle('open');

};

let x=0;
    
    let i = 1;
    for(let li of carousel.querySelectorAll('li')) {
    li.style.position = 'relative';
  
    
    
    i++;
    }
    let width = 30; 
    let count = 3;

    if (document.documentElement.clientWidth <425) {

       width = 37
    } 

    else if  (document.documentElement.clientWidth >425 &&document.documentElement.clientWidth<1200) {
      width = 60
   } 
    else{
        width=130;
    }
    
    let list = carousel.querySelector('ul');
    let listElems = carousel.querySelectorAll('li');

    let position = 0; 
    let radioBtn=document.querySelectorAll('#radio_btn div')
    
    
    let countBtn=0;
    if(x==0){
        radioBtn[x].style.backgroundColor='black';
        
    }
    carousel.querySelector('.prev').onclick = function() {

        console.log(position)
        let radioBtn=document.querySelectorAll('#radio_btn div')
        
        radioBtn[x].style.backgroundColor='#D9D9D9';
    
            x--
                if(x>=0&&x<5){

                radioBtn[x].style.backgroundColor='black';
            console.log(x)
    
          }
       
        if(x>=0&&x<4&&document.documentElement.clientWidth <425){
            radioBtn[x].style.backgroundColor='black';
            
          }
          if(x<0&&document.documentElement.clientWidth <425){
            x=4;
            radioBtn[x].style.backgroundColor='black';
            position=-450;
          }
          if(x<0&&document.documentElement.clientWidth >1200){
            x=4;
            radioBtn[x].style.backgroundColor='black';
            position=-1950;
          }
          if(x>0&&x<4&&document.documentElement.clientWidth >1200){
            radioBtn[x].style.backgroundColor='black';
            
          }

          if(x<0&&document.documentElement.clientWidth >425){
            x=4;
            radioBtn[x].style.backgroundColor='black';
            position=-720;
          }
          if(x>04&&document.documentElement.clientWidth >425){
            radioBtn[x].style.backgroundColor='black';
            
          }
          if(x==5){
            x=0;
            radioBtn[x].style.backgroundColor='black';
            position=-390
          }
          
  position += width * count;

  position = Math.min(position, 0)
  list.style.marginLeft = position + 'px';
};


carousel.querySelector('.next').onclick = function() {
console.log(x)
  
    radioBtn[x].style.backgroundColor='#D9D9D9';
    
        
            x++
          if(x<=4&&document.documentElement.clientWidth <425){
            radioBtn[x].style.backgroundColor='black';
            
          }
          
          if(x<=4&&document.documentElement.clientWidth >1200){
            radioBtn[x].style.backgroundColor='black';
            
          }
          if(x>4&&document.documentElement.clientWidth >1200){
            x=0;
            radioBtn[x].style.backgroundColor='black';
            position=390
          }
          if(x>4&&document.documentElement.clientWidth <425){
            x=0;
            radioBtn[x].style.backgroundColor='black';
            position=90
          }

          if(x<=4&&document.documentElement.clientWidth >425){
            radioBtn[x].style.backgroundColor='black';
          
          }
          if(x>4&&document.documentElement.clientWidth >425){
            x=0;
            radioBtn[x].style.backgroundColor='black';
          
            position=180
          }
            
  position -= width * count;

  console.log(position)
  list.style.marginLeft = position + 'px';
};


let reg_auth_btn_block = document.querySelector('.reg-auth_btn-block');
let office_exit_btn_block=  document.querySelector('.office-exit_btn-block');

