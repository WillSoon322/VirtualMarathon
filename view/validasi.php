<head>
    <link rel="stylesheet" href="view/style/validasi.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
require_once 'controller/services/mysqlDB.php';
require_once "model/topUp.php";
?>

<body>
    <div class="dim_overlay"></div>
    <div class="modal">
        <button class="exit_button"> X </button>
        <form action="validasi" method="post">
            <br>
            <input class="modal_el id_top_up" type="text" name="idT"><br>
            <input class="modal_el" type="radio" class="" value="true" name="validation">
            <label class="modal_el" for="validation">validate</label><br>
            <input class="modal_el" type="radio" class="" value="false" name="validation">
            <label class="modal_el" for="validation">reject</label><br>
            <button type="submit">Submit</button>
        </form>
    </div>

    <div class="content">
        <table class="table1">

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

            <?php
            $start = 0;
            $show = 10;

            $pageCount = (count($result)) / $show;
            if ($pageCount % $show != 0) {
                $pageCount++;
            }

            for ($i = 1; $i < $pageCount; $i++) {
                $temp = $show * ($i - 1);
                echo "<a href =\"users.php?start=$temp\">$i</a>";
            }

            $_GET['start'] = 0;

            if (isset($_GET['start'])) {
                $db = new MySQLDB("localhost", "root", "", "tugasbesar");
                $start = $db->escapeString($_GET['start']);
                $query = "SELECT * FROM transaksi_top_up t INNER JOIN peserta p ON p.idU=t.idP where t.`status` = 'Belum Tervalidasi'
                     ";
                $query .= " LIMIT $start, $show";
                $query_result = $db->executeSelectQuery($query);
                $temp = []; //belum tervalidasi
                foreach ($query_result as $key => $value) {
                    $temp[] = new TopUp(
                        $value["id_top_up"],
                        $value["saldo_awal"],
                        $value["saldo_akhir"],
                        $value["nominal"],
                        $value["tanggal"],
                        $value["status"],
                        $value["gambar_bukti"],
                        $value["idP"],
                        $value["jenis"],
                        $value["nama"],
                        $value["idA"]
                    );
                }
                $result[0] = $temp;
                // var_dump($result);
            }

            ?>

            <?php foreach ($result[0] as $key => $row) {
            ?>
                <tr>
                    <td><?php echo $row->getIdTopUp() ?></td>
                    <td><?php echo $row->getNama() ?></td>
                    <td><?php echo $row->getJenis() ?></td>
                    <td><?php echo $row->getNominal() ?></td>
                    <td><?php echo $row->getTanggal() ?></td>
                    <td><?php echo $row->getStatus() ?></td>
                    <td><button class="validate_button">Validate</button></td>
                    <td><button class="bukti_button show">Bukti</button><button class="keluar">X</button>
                    <div class="overlay_image"><img class="inside_image" src="<?php echo $row->getGambar()?>"/></div>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <table class="table2">
            <tr>
                <th>Id Top-Up</th>
                <th>Nama Peserta</th>
                <th>Metode Pembayaran</th>
                <th>Jumlah Top-Up</th>
                <th>Waktu Pembayaran</th>
                <th>Action</th>
                <th>gambar</th>
            </tr>
            <?php foreach ($result[1] as $key => $row) {
            ?>
                <tr>
                    <td><?php echo $row->getIdTopUp() ?></td>
                    <td><?php echo $row->getNama() ?></td>
                    <td><?php echo $row->getJenis() ?></td>
                    <td><?php echo $row->getNominal() ?></td>
                    <td><?php echo $row->getTanggal() ?></td>
                    <td><?php echo $row->getStatus() ?></td>
                    <td><button class="bukti_button show">Bukti</button><button class="keluar">X</button>
                    <div class="overlay_image"><img class="inside_image" src="<?php echo $row->getGambar()?>"/></div>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <table class="table3">
            <tr>
                <th>Id Top-Up</th>
                <th>Nama Peserta</th>
                <th>Metode Pembayaran</th>
                <th>Jumlah Top-Up</th>
                <th>Waktu Pembayaran</th>
                <th>Action</th>
                <th>gambar</th>
            </tr>
            <?php foreach ($result[2] as $key => $row) {
            ?>
                <tr>
                    <td><?php echo $row->getIdTopUp() ?></td>
                    <td><?php echo $row->getNama() ?></td>
                    <td><?php echo $row->getJenis() ?></td>
                    <td><?php echo $row->getNominal() ?></td>
                    <td><?php echo $row->getTanggal() ?></td>
                    <td><?php echo $row->getStatus() ?></td>
                    <td><button class="bukti_button show">Bukti</button><button class="keluar">X</button>
                    <div class="overlay_image"><img class="inside_image" src="<?php echo $row->getGambar()?>"/></div>
                    </td>
                </tr>
            <?php } ?>

        </table>
    </div>

    <script defer src="view/JS/validasi.js"></script>
</body>

</html>