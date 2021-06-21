let table = document.querySelector('tbody').children;

for (let i = 1; i < table.length; i++) {
    let id = table[i].firstElementChild.innerHTML;
    let btn = table[i].lastElementChild.firstElementChild;
    btn.addEventListener('click', function () {
        document.querySelector('.dim_overlay').classList.add('show')
        document.querySelector('.modal').classList.add('show')
        document.querySelector('.id_top_up').value = id;
    })
}

let exit = document.querySelector('.exit_button')

exit.addEventListener("click", function () {
    document.querySelector('.dim_overlay').classList.remove('show')
    document.querySelector('.modal').classList.remove('show')
})

let Fetch = document.querySelector('.request_data')
Fetch.addEventListener('click', function () {
    event.preventDefault();
    console.log("dapet data");
})

/* <div class="dim_overlay"></div>
    <div class="modal">
        <button class="exit_button"> X </button>
        <form action="">
            <input class="id_top_up" type="text" readonly>
            <button class="request_data">Fetch Data</button>
        </form>
    </div> */