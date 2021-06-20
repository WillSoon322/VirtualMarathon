let temp = document.querySelector('.add_progress')

temp.addEventListener("click",function(){
    document.querySelector('.dim_overlay').classList.add('show')
    document.querySelector('.modal').classList.add('show')
})

let exit = document.querySelector('.exit_button')

exit.addEventListener("click",function(){
    document.querySelector('.dim_overlay').classList.remove('show')
    document.querySelector('.modal').classList.remove('show')
})