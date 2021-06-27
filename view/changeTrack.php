<head>
    <link rel="stylesheet" href="view/style/ubahtrack.css">
    <title>Virtual Marathon Signup</title>
</head>

<img class="back" src="view/assets/bg.jpg" alt="">
<div class="track_box">

    <div class="ubah_track_box">
        <form method="post" action="changeTrack" enctype="multipart/form-data">

            <select name="track">

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
                <br>
            <input class="text_input" type="text" name="region">
            <label class="text_label" for="region">Region: </label>
                <br><br><br><br><br><br> <br><br><br><br><br><br>
                
            <label  for="gambarTrack">Foto Track: </label>
            <input type="file" class="gambarTrack" name="gambarTrack">
                 <br>
            <label  for="gambarMedali">Foto Medali: </label>
            <input type="file" class="gambarMedali" name="gambarMedali">
            
                <br>
            <label  for="gambarBadge">Foto Badge: </label>
            <input type="file" class="gambarBadge" name="gambarBadge">
            <br><br><br>
            <br>
            <button type="submit">Ubah Track</button>
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