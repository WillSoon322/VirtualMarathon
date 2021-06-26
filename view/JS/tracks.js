let accordion_button = document.querySelector('.region_accordion');

accordion_button.addEventListener("click", function () {
    event.preventDefault()
    let panel = document.querySelector('.region_panel').classList.toggle("hide")
})

let card = document.querySelector('.grid_container').children;
console.log(card);

for (i = 0; i < card.length; i++) {
    let form = card[i].firstElementChild;
    console.log(form);
    card[i].addEventListener("click", function () {
        form.submit();
    })
}
let panel = document.querySelector('.region_panel').children

for (let x of panel){
    x.addEventListener('click',function(){
        event.preventDefault();
        document.querySelector('.region_accordion').innerHTML=x.innerHTML
        document.querySelector('input[name="namaTrack"]').value = x.innerHTML
    })
}

// let filter = document.querySelector('.trackUtil_btn')
// filter.addEventListener('click')