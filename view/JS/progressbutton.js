let form = document.getElementByClassName("progressForm");
let button = document.getElementByClassName("get_track");
console.log(form);
console.log(button);
button.addEventListener("click", function () {
    console.log("submit");
    form.submit();
})