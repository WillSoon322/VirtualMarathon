let links = document.querySelector('.trackList').children
for(let a of links){
    a.addEventListener('click',function(){
        event.preventDefault();
        let destination = a.innerHTML
        '<%Session["trackDestination"] = "'+destination+'"; %>';
        window.location.href = "progress";
    })
}