let general = document.querySelector('.general_button');
let track = document.querySelector('.track_button');
let user = document.querySelector('.user_button');

general.addEventListener('click',function(){
    document.querySelector('.general').classList.add('show')
    document.querySelector('.tracks').classList.remove('show')
    document.querySelector('.users').classList.remove('show')
})

track.addEventListener('click',function(){
    document.querySelector('.tracks').classList.add('show')
    document.querySelector('.general').classList.remove('show')
    document.querySelector('.users').classList.remove('show')
})

user.addEventListener('click',function(){
    document.querySelector('.tracks').classList.remove('show')
    document.querySelector('.general').classList.remove('show')
    document.querySelector('.users').classList.add('show')
})