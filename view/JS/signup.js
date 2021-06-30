let form_submit = document.querySelector('button')
let form = document.querySelector('form')

let Email = document.querySelector('input[name="email"]')
let email = true;
let Uname = document.querySelector('input[name="username"]')
let uname = false;
let Name = document.querySelector('input[name="name"]')
let namee = false;
let Gender = document.querySelector('select')
let gender = true;
let Age = document.querySelector('input[name="age"]')
let age = false;
let Address = document.querySelector('input[name="address"]')
let address = true;
let Phone = document.querySelector('input[name="phone"]')
let phone = true;
let Password = document.querySelector('input[name="password"]')
let password = false;
let Re_password = document.querySelector('input[name="re_password"]')
let re_password = false;
let Agree = document.querySelector('input[type="checkbox"]')


Uname.addEventListener("focusout", function () {
    if (Uname.value.length < 3) {
        Uname.classList.add('wrong')
        uname = false
    } else {
        Uname.classList.remove('wrong')
        uname = true
    }
})

Name.addEventListener("focusout", function () {
    if (Name.value.length <= 0) {
        Name.classList.add('wrong')
        namee = false
    } else {
        Name.classList.remove('wrong')
        namee = true
    }
})

Age.addEventListener("focusout", function () {
    if (Age.value <= 5 || Age.value >= 100) {
        Age.classList.add('wrong')
        age = false
    } else {
        Age.classList.remove('wrong')
        age = true
    }
})

Address.addEventListener('focusout', function () {
    console.log("halo");
    document.querySelector('input[name="city"]').style.display = "block"
    document.querySelector('label[for="city"]').style.display = "block"
    document.querySelector('input[name="country"]').style.display = "block"
    document.querySelector('label[for="country"]').style.display = "block"
})

Password.addEventListener("focusout", function () {
    if (Password.value.length <= 7) {
        alert("password need to be 8 or more character")
        Password.classList.add('wrong')
        password = false
    } else {
        Password.classList.remove('wrong')
        password = true
    }
})

Re_password.addEventListener("focusout", function () {
    if (Re_password.value != Password.value) {
        // alert("password does not match")
        Re_password.classList.add('wrong')
        re_password = false
    } else {
        Re_password.classList.remove('wrong')
        re_password = true
    }
})

form_submit.addEventListener('click', function () {
    validate();
})

function validate() {
    if (email && uname && namee && gender && age && address && phone && password && re_password) {
        form.submit();
    } else {
        console.log(email);
        console.log(uname);
        console.log(namee);
        console.log(gender);
        console.log(age);
        console.log(address);
        console.log(phone);
        console.log(password);
        console.log(re_password);
        console.log(Agree.checked);
    }
}