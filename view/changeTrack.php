<head>
    <link rel="stylesheet" href="view/style/ubahtrack.css">
    <title>Virtual Marathon Signup</title>
</head>

<img class="back" src="view/assets/bg.jpg" alt="">
<div class="track_box">

    <div class="ubah_track_box">
        <form method="POST" action="changeTrack">

            <select name="track" id="cars">

                <option value="default">Select Track</option>

                <?php
                foreach ($result as $key => $row) {
                    echo "<option value='", $row->getIdT(), "'>", $row->getTema(), "</option>";
                }
                ?>
            </select>
            <label class="text_label" for="track">Nama Track: </label> <br>


            <input class="text_input" type="text" name="trackbaru">
            <label class="text_label" for="username">Nama Baru : </label>


            <input class="text_input" type="text" name="harga">
            <label class="text_label" for="harga">Harga Baru: </label>

            <input class="text_input" type="text" name="region">
            <label class="text_label" for="region">Region: </label>

            <input class="text_input" type="text" name="jarak">
            <label class="text_label" for="jarak">jarak Baru: </label>

            <a class="text_label">Foto Track Baru:</a>
            <b class="text_input">
                <input type="file" name="fileToUploadGambar" id="fileToUpload">
            </b>
            <a class="text_label">Foto Medali Baru:</a>
            <b class="text_input">
                <input type="file" name="fileToUploadMedal" id="fileToUpload">
            </b>
            <a class="text_label">Foto Badge Baru:</a>
            <b class="text_input">
                <input type="file" name="fileToUploadBagde" id="fileToUpload">
            </b>
            <div class="button_box">
                <button>Ubah Track</button>
            </div>
    </div>

    </form>
</div>
<!-- <script>
    let jumlah = document.querySelector('select').children.length
    var arr;
    console.log(jumlah);
    for (let i = 0; i < jumlah; i++) {
        let temp = [

        ]
        console.log(temp);
        arr[i] = temp;
    }
</script> -->

<script defer src="view/JS/changeTrack.js"></script>