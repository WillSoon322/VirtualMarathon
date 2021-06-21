let table = document.querySelector('tbody').children;

for (let i = 1; i < table.length; i++) {
    let id = table[i].firstElementChild.innerHTML;
    let btn = table[i].lastElementChild.previousElementSibling;
    
    console.log("btn");
    btn.addEventListener('click', function () {
        document.querySelector('.dim_overlay').classList.add('show')
        document.querySelector('.modal').classList.add('show')
    })
}

let exit = document.querySelector('.exit_button')

exit.addEventListener("click", function () {
    document.querySelector('.dim_overlay').classList.remove('show')
    document.querySelector('.modal').classList.remove('show')
})