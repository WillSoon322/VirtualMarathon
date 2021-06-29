let setting = document.querySelector('.setting')
setting.addEventListener('click', function () {
    let over = document.querySelector('.over')
    over.style.display = 'block'
})
let button = document.querySelector(".myButton");
let input = document.querySelector(".inputTrack").value;
console.log(button)
console.log(input)
if (input == "") {
    button.disabled = true;
}
else {
    button.disabled = false;
}

function submit() {
    let submit = document.querySelector(".buttonForm");
    submit.submit;

}

let trackss = document.querySelector('.trackList').children;
for(let p = 3;p<trackss.length;p++){
    console.log(trackss[p]);
    let fill = trackss[p].firstElementChild.firstElementChild;
    let pers = trackss[p].lastElementChild.previousElementSibling.innerHTML;
    fill.style.width = pers + '%'
    console.log(pers);
}