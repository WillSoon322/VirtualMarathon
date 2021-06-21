<head>
    <link rel="stylesheet" href="view/style/validasi.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    //var_dump($result);
    ?>
<body>
 

    <header>
        navigasi
    </header>
    <div class="dim_overlay"></div>
    <div class="modal">
        <button class="exit_button"> X </button>
        <form action="">
            <input class="id_top_up" type="text" readonly>
            <button class="request_data">Fetch Data</button>
        </form>
    </div> 
    
    <div class="content">
        <table>
        
            <tr>
                <th>Id Top-Up</th>
                <th>Nama Peserta</th>
                <th>Metode Pembayaran</th>
                <th>Jumlah Top-Up</th>
                <th>Waktu Pembayaran</th>
                <th>Status</th>
                <th>Action</th>
                <th>gambar</th>
            </tr>
            <?php foreach ($result[0] as $key => $row) {
            ?>
                <tr>
                <td><?php echo $row->getIdTopUp()?></td>
                <td><?php echo $row->getNama()?></td>
                <td><?php echo $row->getJenis()?></td>
                <td><?php echo $row->getNominal()?></td>
                <td><?php echo $row->getTanggal()?></td>
                <td><?php echo $row->getStatus()?>
                <td><button class="validate_button">Validate</button></td>
               <td><div class="overlay_image"><?php echo '<img class="inside_image" src="data:image/jpg;base64,' . base64_encode($row->getGambar()) . '"/>' ?></div></td> 
                </tr>
            <?php } ?>
            <?php foreach ($result[1] as $key => $row) {
            ?>
                <tr>
                <td><?php echo $row->getIdTopUp()?></td>
                <td><?php echo $row->getNama()?></td>
                <td><?php echo $row->getJenis()?></td>
                <td><?php echo $row->getNominal()?></td>
                <td><?php echo $row->getTanggal()?></td>
                <td><?php echo $row->getStatus()?></td>
                <td><button class="validate_button">Validate</button></td>
                <td><div class="overlay_image"><?php echo '<img class="inside_image" src="data:image/jpg;base64,' . base64_encode($row->getGambar()) . '"/>' ?></div></td> 
                </tr>
            <?php } ?>
            <?php foreach ($result[2] as $key => $row) {
            ?>
                <tr>
                <td><?php echo $row->getIdTopUp()?></td>
                <td><?php echo $row->getNama()?></td>
                <td><?php echo $row->getJenis()?></td>
                <td><?php echo $row->getNominal()?></td>
                <td><?php echo $row->getTanggal()?></td>
                <td><?php echo $row->getStatus()?></td>
                <td><button class="validate_button">Validate</button></td>
                <td><div class="overlay_image"><?php echo '<img class="inside_image" src="data:image/jpg;base64,' . base64_encode($row->getGambar()) . '"/>' ?></div></td> 
                </tr>
            <?php } ?>

        </table>
    </div>

    <script defer src="view/JS/validasi.js"></script>
</body>

</html>


