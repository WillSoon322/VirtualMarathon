let general = document.querySelector('.general_button');
let track = document.querySelector('.track_button');
let user = document.querySelector('.user_button');

general.addEventListener('click', function () {
    document.querySelector('.general').classList.add('show')
    document.querySelector('.tracks').classList.remove('show')
    document.querySelector('.users').classList.remove('show')
    document.querySelector('.user_button').classList.remove('active')
    document.querySelector('.track_button').classList.remove('active')
    document.querySelector('.general_button').classList.add('active')
})

track.addEventListener('click', function () {
    document.querySelector('.tracks').classList.add('show')
    document.querySelector('.general').classList.remove('show')
    document.querySelector('.users').classList.remove('show')
    document.querySelector('.user_button').classList.remove('active')
    document.querySelector('.track_button').classList.add('active')
    document.querySelector('.general_button').classList.remove('active')
})

user.addEventListener('click', function () {
    document.querySelector('.tracks').classList.remove('show')
    document.querySelector('.general').classList.remove('show')
    document.querySelector('.users').classList.add('show')
    document.querySelector('.user_button').classList.add('active')
    document.querySelector('.track_button').classList.remove('active')
    document.querySelector('.general_button').classList.remove('active')
})

let pdf = document.querySelector('.pdfbutton')
console.log(pdf);
pdf.addEventListener('click', function () {
    console.log("hai");
    getPDF();
})

function getPDF() {
    var doc = new jsPDF();

    doc.text('LAPORAN GENERAL', 40, 20)

    doc.save('Generated.pdf');
}