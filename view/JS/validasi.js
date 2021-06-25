let x = (document.querySelector('.content').children);

for(let temp of x){
    let table = (temp.firstElementChild.children);

    for (let i = 1; i < table.length; i++) {
        let id = table[i].firstElementChild.innerHTML;
        let btn = table[i].lastElementChild.previousElementSibling;
        btn.addEventListener('click', function () {
            document.querySelector('.id_top_up').value = id;
            document.querySelector('.dim_overlay').classList.add('show')
            document.querySelector('.modal').classList.add('show')
        })
    }
    
    let exit = document.querySelector('.exit_button')
    
    exit.addEventListener("click", function () {
        document.querySelector('.dim_overlay').classList.remove('show')
        document.querySelector('.modal').classList.remove('show')
    })
    
    for (let i = 1; i < table.length; i++) {
        let bukti = (table[i].lastElementChild.firstElementChild);
        let keluar = bukti.nextElementSibling;
        let image = keluar.nextElementSibling.firstElementChild;
        // console.log(bukti);
        // console.log(keluar);
        // console.log(image);
        bukti.addEventListener('click', function () {
            bukti.classList.remove('show');
            keluar.classList.add('show');
            image.classList.add('show');
        })
    
        keluar.addEventListener('click', function(){
            bukti.classList.add('show');
            keluar.classList.remove('show');
            image.classList.remove('show');
        })
    }
}

