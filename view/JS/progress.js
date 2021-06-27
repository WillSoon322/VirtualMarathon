let temp = document.querySelector('.add_progress')

temp.addEventListener("click", function () {
    document.querySelector('.dim_overlay').classList.add('show')
    document.querySelector('.modal').classList.add('show')
})

let exit = document.querySelector('.exit_button')

exit.addEventListener("click", function () {
    document.querySelector('.dim_overlay').classList.remove('show')
    document.querySelector('.modal').classList.remove('show')
})

let percentage = document.querySelector(".progress").innerHTML
//console.log(percentage)
if (percentage == "100,00%") {
    document.querySelector('input[name="progressInputText"]').style.display = "none";
    document.querySelector('label[for="progressInputText"]').style.display = "none";
    document.querySelector('.add_progress').style.display = "none";
}

