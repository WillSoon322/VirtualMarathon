<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laporan</title>
    <script defer src="view/JS/laporan.js"></script>
    <script src="https://kit.fontawesome.com/c3d54056dd.js" crossorigin="anonymous"></script>
    <script src="view/JS/Chart.bundle.js"></script>
    <script src="view/JS/utils.js"></script>
    <script src="view/JS/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.15/jspdf.plugin.autotable.min.js" integrity="sha512-y7bAIyWa5Ncv0AFN0tcz4QLyPFVIHqN66hvNyIY0uryA8RIcKNyR9MjHpuUY95Baj2KwQ7EdRWoer7vLimZAHg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="view/style/laporan.css">
</head>




<body>
    <div class="content">
        <?php
        $temp = [];
        //foreach($result[0][3] as $row=>$value){
            $temp[]=$result[0][3][0]->getSum();
            $temp[]=$result[0][3][1]->getSum();
            $temp[]=$result[0][3][2]->getSum();
            $temp[]=$result[0][3][3]->getSum();
            $temp[]=$result[0][3][4]->getSum();
            $temp[]=$result[0][3][5]->getSum();
            $temp[]=$result[0][3][6]->getSum();
            $temp[]=$result[0][3][7]->getSum();
            $temp[]=$result[0][3][8]->getSum(); 
            $temp[]=$result[0][3][9]->getSum();
            $temp[]=$result[0][3][10]->getSum();
            $temp[]=$result[0][3][11]->getSum();
        //}
        // var_dump(json_encode($temp));

        ?>

        <script>
            var tab = <?php echo json_encode($temp) ?>;
        </script>

        <div class="default">WELCOME</div>
        <div class="type">
            <div class="type_button general_button">
                General
            </div>
            <div class="type_button track_button">
                Track
            </div>
            <div class="type_button user_button">
                User
            </div>
            <button class="pdfbutton">Generate PDF</button>
        </div>
        <div class="page general">
            <div class="grid_container">
                <div class="grid_item user">
                    <i class="fas fa-user usercount"></i>
                    <p class="usercountp">
                        <?php
                        //TOTAL PESERTA
                        $totalUser = $result[0][0]->getCount();
                        echo "$totalUser";
                        ?>
                    </p>
                </div>
                <div class="grid_item income">
                    <i class="fas fa-wallet"> TOTAL INCOME</i>
                    <p>Rp <?php
                            //TOTAL INCOME
                            $totalIncome = $result[0][1]->getSum();
                            echo "$totalIncome";
                            ?></p>
                </div>
                <div class="grid_item track">
                    <i class="fas fa-road trackcount"></i>
                    <!-- BANYAK TRACK -->
                    <p class="trackcountp"><?php echo $result[0][2]->getCount() ?></p>
                </div>
                <div class="grid_item income_graph">
                    <div style="width:100%;">
                        <canvas id="canvas"> </canvas>
                    </div>
                </div>
                <div class="grid_item">5</div>
                <div class="grid_item">6</div>
                <div class="grid_item">7</div>
                <div class="grid_item">8</div>
            </div>
        </div>
        <div class="page tracks">
            <div class="tracks_content">
                <div class="tracks_item statistik_track">
                    <div style="width:100%; height:100%;">
                        <canvas id="canvas2"> </canvas>
                    </div>
                </div>
                <div class="tracks_item track2">
                    <i class="fas fa-road"></i>
                    <p><?php echo $result[0][2]->getCount() ?></p>
                </div>
                <div class="tracks_item"></div>
                <div class="tracks_item stat2">
                    <div>Track paling diminati: </div>
                    <div class="populars">
                        <?php $track = $result[0][4][0];
                        echo $track->getTema();
                        ?>
                    </div>

                </div>
                <div class="tracks_item table_user_track">
                    <table>
                        <tr>
                            <th>idTrack</th>
                            <th>Tema Track</th>
                            <th>Jumlah Peserta</th>
                        </tr>
                        <?php foreach ($result[0][4] as $key => $row) {
                        ?>
                            <tr>
                                <!-- //TRACK TERKENAL -->
                                <td><?php $idT = $row->getIdT();
                                    echo "$idT" ?></td>
                                <td><?php $tema = $row->getTema();
                                    echo "$tema" ?></td>
                                <td><?php $count = $row->getCount();
                                    echo "$count" ?></td>
                            </tr>


                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="page users">
            <div class="user_grid">
                <div class="user_item age_span">
                    <table>
                        <tr>
                            <th>Range Umur</th>
                            <th>Jumlah</th>
                        </tr>
                        <?php $counter1 = 1;
                        $counter2 = 10;
                        foreach ($result[0][5] as $key => $row) {
                        ?>
                            <tr>
                                <!-- RANGE UMUR -->
                                <td> <?php echo "$counter1" . '-' . "$counter2"; ?></td>
                                <?php $counter1 = 1 + $counter2;
                                $counter2 += 10 ?>
                                <td> <?php echo $row->getCount(); ?></td>

                            </tr>


                        <?php } ?>
                    </table>
                </div>
                <div class="user_item user_count" id="canvas3"></div>
                <div class="user_item male_user">
                    <div>JUMLAH PRIA: <br><?php echo $result[0][6][0]->getCount() ?></div> 
                </div>
                <div class="user_item female_user">
                    JUMLAH WANITA : <br><?php echo $result[0][6][1]->getCount() ?>
                </div>
                <div class="user_item">
                    <!-- jumlah anak muda -->
                    jumlah anak muda: <br>
                    <?php
                    $anakMuda = 0 + $result[0][5][0]->getCount() + $result[0][5][1]->getCount();
                    echo $anakMuda;
                    ?>
                </div>
                <div class="user_item">
                    <!-- jumlah orang dewasa -->
                    jumlah orang dewasa: <br>
                    <?php
                    $dewasa = 0 + $result[0][5][2]->getCount() + $result[0][5][3]->getCount() + $result[0][5][4]->getCount() + $result[0][5][5]->getCount();
                    echo $dewasa;
                    ?>
                </div>
                <div class="user_item">
                    <!-- jumlah lansia -->
                    jumlah lansia: <br>
                    <?php
                    $lansia = 0 + $result[0][5][5]->getCount() + $result[0][5][3]->getCount() + $result[0][5][3]->getCount() + $result[0][5][4]->getCount();
                    echo $lansia;
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        var pdftopup = <?php echo(json_encode($result[0][7])); ?>;
        // console.log(pdftopup.length);

        var dummyData = [
            4,
            3,
            3,
            1,
            1,
            1
        ]
        var colors = [
            window.chartColors.red,
            window.chartColors.grey,
            window.chartColors.yellow,
            window.chartColors.green,
            window.chartColors.blue
        ]

        var myChart2 = {
            type: 'pie',
            data: {
                labels: ["Mount Fuji", "Candi Borobudur", "Great Pyramid", "New York", "Shanghai","London"],
                datasets: [{
                    backgroundColor: colors,
                    data: dummyData,
                }],

            },
            options: {
                title: {
                    display: true,
                    text: 'Chart.js Pie Chart'
                },
                responsive: true

            },
        };

        var dummyData2 = [
            4,
            3,
            3,
            1,
            1,
            1
        ]
        var colors2 = [
            window.chartColors.red,
            window.chartColors.grey,
            window.chartColors.yellow,
            window.chartColors.green,
            window.chartColors.blue,
            window.chartColors.purple,
            window.chartColors.green
        ]

        var myChart3 = {
            type: 'pie',
            data: {
                labels: ["Mount Fuji", "Candi Borobudur", "Great Pyramid", "New York", "Shanghai","London"],
                datasets: [{
                    backgroundColor: colors2,
                    data: dummyData2,
                }],

            },
            options: {
                title: {
                    display: true,
                    text: 'Chart.js Pie Chart'
                },
                responsive: true

            },
        };

        var dataPemasukan = []
        for (let a in tab) {
            if (tab[a] == null) {
                dataPemasukan[a] = 0;
            } else {
                dataPemasukan[a] = parseInt(tab[a])
            }
        }
        console.log(dataPemasukan);
        //[0];
        var myChart = {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                datasets: [{
                    label: "Pemasukan",
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.blue,
                    data: dataPemasukan,
                    fill: false,
                }],

            },
            options: {
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Money'
                        }
                    }]
                },
                title: {
                    display: true,
                    text: 'Laporan Bulanan'
                },
                responsive: true
            }
        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            new Chart(ctx, myChart);

            var ctx2 = document.getElementById('canvas2').getContext("2d");
            new Chart(ctx2, myChart2);

            var ctx3 = document.getElementById('canvas3').getContext("2d");
            new Chart(ctx3, myChart3);
        };
    </script>


</body>

</html>