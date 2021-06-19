let accordion_button = document.querySelector('.region_accordion');

accordion_button.addEventListener("click",function(){
    let panel = document.querySelector('.region_panel').classList.toggle("hide")
})