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

console.log(chartTrack);

let pdf = document.querySelector('.pdfbutton')
pdf.addEventListener('click', function () {
    getPDF();
})

let pdf2 = document.querySelector('.pdfbutton2')
pdf.addEventListener('click', function () {
    getPDF2();
})

function getTopupData(){
    let data = [...Array(pdftopup.length)].map(e => Array(4));
    for(let i = 0 ; i<pdftopup.length;i++){
        let part = pdftopup[i]
        data[i][0] = part['id_top_up']
        data[i][1] = part['idP']
        data[i][2] = part['nominal']
        data[i][3] = part['tanggal']
    }
    console.log(data);
    return data
}

function getPDF() {
    var doc = new jsPDF();
    let total = pdftotal
    doc.text('LAPORAN KEUANGAN VIRTUAL MARATHON', 40, 20)
    doc.line(20, 25, 300, 25);
    doc.autoTable({
        startY : 30,
        head: [['idTopUp', 'User', 'Nominal', 'Tanggal']],
        body: this.getTopupData(),
      })
    doc.line(20, 265, 300, 265);
    doc.text("Total : " + total, 20, 275)
    doc.save('Generated.pdf');
}

function getPDF() {
    var doc = new jsPDF();
    let total = pdftotal
    doc.text('LAPORAN USER VIRTUAL MARATHON', 40, 20)
    doc.line(20, 25, 300, 25);
    doc.autoTable({
        startY : 30,
        head: [['idTopUp', 'User', 'Nominal', 'Tanggal']],
        body: this.getTopupData(),
      })
    doc.line(20, 265, 300, 265);
    doc.text("Total : " + total, 20, 275)
    doc.save('Generated.pdf');
}