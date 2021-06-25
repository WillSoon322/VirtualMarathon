<head>
    <link rel="stylesheet" href="view/style/statusPeserta.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="content">
        <div class="request_medali part">
            <div class="part_overlay medali_overlay">1</div>
            <div class="part_modal medali_modal">
                <div class="exit1">X</div>
                <form action="statusPeserta" method="POST">
                    <label for="resi">no resi</label>
                    <input type="text" class="requestMedali" name="resi">
                    <button type="submit">Send</button>
                </form>
            </div>
            <div class="accordion_head">
                Request Medali
            </div>
            <div class="accordion_content">
                <table class="styled_table request_table">
                    <tr>
                        <th>Id Medali</th>
                        <th>Nama</th>
                        <th>Track</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($result[0] as $key => $row) {
                       
                    ?>
                        <tr>
                            <td><?php echo $row->getId()  ?></td>
                            <td><?php echo $row->getNama()  ?></td>
                            <td><?php echo $row->getTema()  ?></td>
                            <td><?php echo $row->getAlamat()  ?></td>
                            <td><button>Send</button></td>
                        </tr>
                  <?php } ?>
                    <!-- <tr>
                        <td>3</td>
                        <td>Wilson</td>
                        <td>Mt. Fuji</td>
                        <td>Jalan Terusan Kiaracondong 272</td>
                        <td><button>Send</button></td>
                    </tr> -->
                </table>
            </div>
        </div>
         <div class="status_medali part">
            <div class="part_overlay medali2_overlay">1</div>
            <div class="part_modal medali2_modal">
                <div class="exit2">X</div>
                <form action="">
                    <input type="text" class="statusMedali" readonly>
                </form>
            </div> 
            <div class="accordion_head">
                Status Medali
            </div>
            <div class="accordion_content">
                <table class="styled_table medali_table">
                    <tr>
                        <th>Id medali</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>No resi</th>
                    </tr>
                    <?php foreach ($result[1] as $key => $row) {
                        
                    ?>  
                    
                        <tr>
                            <td><?php echo $row->getId()  ?></td>
                            <td><?php echo $row->getNama()  ?></td>
                            <td><?php echo $row->getAlamat()  ?></td>
                            <td><?php echo $row->getStatus()  ?></td>
                            <td><?php echo $row->getNoResi()  ?></td>
                            
                           
                        </tr>
                  <?php } ?>
                    <!-- <tr>
                        <td>1</td>
                        <td>Wilson</td>
                        <td>Mt. Fuji</td>
                        <td>Jalan Terusan Kiaracondong 272</td>
                        <td><button>Send</button></td>
                    </tr> -->
                </table>
            </div>
        </div>
        <div class="status_peserta part">
            <div class="part_overlay peserta_overlay">1</div>
            <div class="part_modal peserta_modal">
                <div class="exit3">X</div>
                <form action="">
                    <input type="text" class="statusPeserta" readonly>
                </form>
            </div> 
            <div class="accordion_head">
                Status Peserta
            </div>
            <div class="accordion_content">
                <table class="styled_table peserta_table">
                    <tr>
                        <th>Id Peserta</th>
                        <th>Nama</th>
                        <th>Track</th>
                        <th>Progress</th>
                       
                    </tr>
                    <?php foreach ($result[2] as $key => $row) {
                        ?>  
                            <tr>
                                <td><?php echo $row->getId()  ?></td>
                                <td><?php echo $row->getNama()  ?></td>
                                <td><?php echo $row->getTema()  ?></td>
                                <td><?php echo $row->getProgress(). '%'  ?></td>
                                
                            </tr>
                      <?php } ?>
                    <!-- <tr>
                        <td>1</td>
                        <td>Wilson</td>
                        <td>Mt. Fuji</td>
                        <td>Jalan Terusan Kiaracondong 272</td>
                        <td><button>Send</button></td>
                    </tr> -->
                </table>
            </div>
        </div>
    </div>
    <script defer src="view/JS/statusPeserta.js"></script>
</body>

</html>