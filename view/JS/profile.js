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