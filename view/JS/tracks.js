let accordion_button = document.querySelector('.region_accordion');

accordion_button.addEventListener("click", function () {
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

// function goTrack(){
                    // console.log("asdasd");
                    // let nama=document.querySelector("#trackForm");
                    // nama.submit();
                    // }   
// let gridTrackCard = document.querySelector("#grid_track_card");
// gridTrackCard.addEventListener("click", function () {
//     console.log("gridTrackCard is clicked");
// });
