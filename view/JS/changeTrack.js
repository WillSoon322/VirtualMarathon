let x = document.querySelector('.test')

x.addEventListener('click',function(){
    event.preventDefault();
    console.log(document.querySelector('input[name = "fileToUploadGambar"]').value);
    let a = document.createElement('img');
    a.src = document.querySelector('input[name = "fileToUploadGambar"]').value;
})