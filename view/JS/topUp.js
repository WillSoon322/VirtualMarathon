function start(){
    let method = document.querySelector('.method_grid').children;
    
    for(let x of method){
        x.addEventListener('click',function(){
            let conf = document.querySelector('.payment_confirm');
            let confinal = document.querySelector('#confirm_method');

            console.log(confinal);
            conf.value = x.innerHTML;
            confinal.value = conf.value;
        })
    }

    let next = document.querySelector('.ammount_input')

    next.addEventListener('keyup',function(){
        let confirm_ammount = document.querySelector('#confirm_ammount');
        confirm_ammount.value = next.value
    })
}

window.onload = start();
