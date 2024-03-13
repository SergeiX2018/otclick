
let reviews_img=document.querySelector('.reviews_list')
let text_hover=document.querySelector('.textarea_hover')
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