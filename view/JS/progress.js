let percentage = document.querySelector(".progress").innerHTML
//console.log(percentage)
if (percentage == "100,00%") {
    document.querySelector('input[name="progressInputText"]').style.display = "none";
    document.querySelector('label[for="progressInputText"]').style.display = "none";
    document.querySelector('.add_progress').style.display = "none";
}

console.log(persen);
document.querySelector('.progress_fill').style.width = persen + '%'

