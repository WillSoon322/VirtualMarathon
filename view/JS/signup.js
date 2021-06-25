let form_submit = document.querySelector('.button_box').firstElementChild;

form_submit.addEventListener('click',function(){
    event.preventDefault();
    validate();
})

function validate(){
    let Email = document.querySelector('input[name="email"]')
    
    let Uname = document.querySelector('input[name="username"]')

    if(Uname.value.length <3){
        console.log("nope");
    }
    
    let Name = document.querySelector('input[name="name"]')
    
    let Gender = document.querySelector('select')
    
    let Age = document.querySelector('input[name="age"]')
    
    let Address = document.querySelector('input[name="address"]')
    
    let Phone = document.querySelector('input[name="phone"]')
    
    let password = document.querySelector('input[name="password"]')
    let re_password = document.querySelector('input[name="re_password"]')

    let agree = document.querySelector('input[type="checkbox"]')
}