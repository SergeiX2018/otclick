let volunteersList= document.querySelector('#volunteers_list')
let vol1=document.getElementsByClassName('volunteers_img');

manArray = JSON.parse(localStorage.manArray);  

console.log(manArray)
let t= []


let div1=document.createElement('div');

for(let i=0;i<=t.length; i++){
    manArray=manArrayOne[manArray.length-1]
    manArray.id=i;
    t.push(manArray)
    
    i++
    console.log(t)

        
        let li=document.createElement('li');
        let img= document.createElement('img')
        img.width=175;
        img.height=175;
        img.src=manArray.img;
        img.style.cursor='pointer';
        
      

        li.classList.add('volunteers_items');
       
        div1.classList.add('volunteers_img');
        div1.append(img)
        li.append(div1)

        
        let div2=document.createElement('div');
        div2.classList.add('stars_img');
        li.append(div2)
        volunteersList.append(li)
        
        console.log(t)
    }


