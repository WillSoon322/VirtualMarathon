let page = document.querySelector('title').innerHTML
let login = document.querySelector('#Login_btn')
let signup = document.querySelector('#SignUp_btn')
let tracks = document.querySelector('#Tracks_btn')
let profile = document.querySelector('#Profile_btn')
let logout = document.querySelector('#Logout_btn')
let wallet = document.querySelector('#Wallet_btn')

console.log(tracks);

if(page === "SignUp"){
    console.log("sign up");
    login.classList.add("show")
}else if(page === "Login"){
    console.log("Login");
    signup.classList.add("show")
}
else if(page === "Profile"){
    console.log("Profile");
    tracks.classList.add("show")
    logout.classList.add("show")
    wallet.classList.add("show")
}