let accordion_button = document.querySelector('.region_accordion');

accordion_button.addEventListener("click",function(){
    let panel = document.querySelector('.region_panel').classList.toggle("hide")
})

let card = document.querySelector('.grid_container').children;
console.log(card);
for(i=0;i<card.length;i++){
    card[i].addEventListener("click",function(){
        console.log("hai");
    })
}