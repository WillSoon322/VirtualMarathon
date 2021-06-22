let part = document.querySelector('.request_table tbody').children
console.log(part);

for(let a = 1; a<part.length;a++){
    let btn = part[a].lastElementChild.firstElementChild;
    let id1 = part[a].firstElementChild.innerHTML;
    btn.addEventListener('click',function(){
        document.querySelector('.medali_overlay').classList.add('show');
        document.querySelector('.medali_modal').classList.add('show');
        document.querySelector('.requestMedali').value = id1;
    })
}

let exit1 = document.querySelector('.exit1').addEventListener('click',function(){
    document.querySelector('.medali_overlay').classList.remove('show');
        document.querySelector('.medali_modal').classList.remove('show');
})

let part2 = document.querySelector('.medali_table tbody').children
console.log(part2);

for(let a = 1; a<part2.length;a++){
    let btn = part2[a].lastElementChild.firstElementChild;
    let id2 = part2[a].firstElementChild.innerHTML;
    btn.addEventListener('click',function(){
        console.log("hai");
        document.querySelector('.medali2_overlay').classList.add('show');
        document.querySelector('.medali2_modal').classList.add('show');
        document.querySelector('.statusMedali').value = id2;
    })
}

let exit2 = document.querySelector('.exit2').addEventListener('click',function(){
    document.querySelector('.medali2_overlay').classList.remove('show');
        document.querySelector('.medali2_modal').classList.remove('show');
})

let part3 = document.querySelector('.peserta_table tbody').children
console.log(part3);

for(let a = 1; a<part3.length;a++){
    let btn = part3[a].lastElementChild.firstElementChild;
    let id3 = part3[a].firstElementChild.innerHTML;
    btn.addEventListener('click',function(){
        console.log("hai");
        document.querySelector('.peserta_overlay').classList.add('show');
        document.querySelector('.peserta_modal').classList.add('show');
        document.querySelector('.statusPeserta').value = id3;
    })
};

let exit3 = document.querySelector('.exit3').addEventListener('click',function(){
    document.querySelector('.peserta_overlay').classList.remove('show');
    document.querySelector('.peserta_modal').classList.remove('show');
})