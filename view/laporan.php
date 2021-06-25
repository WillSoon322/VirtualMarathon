<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/style/laporan.css">
    <title>laporan</title>
    <script defer src="view/JS/laporan.js"></script>
    <script src="https://kit.fontawesome.com/c3d54056dd.js" crossorigin="anonymous"></script>
    <script src="view/JS/Chart.bundle.js"></script>
    <script src="view/JS/utils.js"></script>
</head>
<?php var_dump($result);?>
<body>
    <div class="content">
        <div class="default">WELCOME</div>
        <div class="type">
            <div class="general_button active">
                General
            </div>
            <div class="track_button">
                Track
            </div>
            <div class="user_button">
                User
            </div>
        </div>
        <div class="page general">
            <div class="grid_container">
                <div class="grid_item user">
                    <i class="fas fa-user"></i>
                    <p>
                        <?php
                        //TOTAL PESERTA
                            $totalUser=$result[0][0];
                            echo "$totalUser";
                        ?>
                    </p>
                </div>
                <div class="grid_item income">
                    <i class="fas fa-wallet"> TOTAL INCOME</i>
                    <?php
                        
                        // $total=0;
                        // //echo $result[0][1][0][1];
                        //  foreach ($result[0][1] as $key => $row){
                        //     // echo $row[0];//dapet count , jadi $row itu udah jadi [0] lagi
                        //     $count=0+$row[0];
                        //     $harga=0+$row[1];
                        //     $total+=$count*$harga;
                        //  }
                    ?>
                     <p>Rp <?php 
                     //TOTAL INCOME
                        $totalIncome=$result[0][1];
                        echo"$totalIncome";
                     ?></p> 
                </div>
                <div class="grid_item track">
                    <i class="fas fa-road"></i>
                    <!-- BANYAK TRACK -->
                    <p><?php echo $result[0][2]?></p>
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
                    <div style="width:50%">
                        <canvas id="canvas2"> </canvas>
                    </div>
                </div>
                <div class="tracks_item track2">
                    <i class="fas fa-road"></i>
                    <p></p>
                </div>
                <div class="tracks_item">3</div>
                <div class="tracks_item">4</div>
                <div class="tracks_item stat2">5</div>
                <div class="tracks_item table_user_track">
                    <table>
                        <tr>
                            <th>idTrack</th>
                            <th>Tema Track</th>
                            <th>Jumlah Peserta</th>
                        </tr>
                    </table>
                </div>
                <div class="tracks_item table_income_track">
                <table>
                        <tr>
                            <th>idTrack</th>
                            <th>Tema Track</th>
                            <th>Income</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="page users">
           <div class="user_grid">
               <div class="user_item age_span">1</div>
               <div class="user_item user_count">2</div>
               <div class="user_item male_user">3</div>
               <div class="user_item female_user">4</div>
               <div class="user_item">5</div>
               <div class="user_item">6</div>
               <div class="user_item">7</div>
           </div>
        </div>
    </div>
   
    <script>
        
        <?php
                // $jan=0+$result[0][1][0][0]*$result[0][1][0][1];
               $arr= [];
               for($i=0;$i<12;$i++){
                   if($result[0][3][$i]==NULL){
                     $arr[$i]=0;
                   }
                   else{
                    $arr[$i]=0+$result[0][3][$i];
                   }     
               }
               var_dump($arr);

        ?>
        var tab = <?php echo $arr?>;
        //[0];
            <?php echo $arr;?>
               console.log(tab[0])
        
        //console.log((tab[0]))
        var dataPemasukan=tab;
        //[0];
        var myChart = {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"],
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
                    text: 'Chart.js Line Chart'
                },
                responsive: true
            }
        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            new Chart(ctx, myChart);

        };
    </script>

    <!-- <script>
        var dummyData = [
            2,
            3,
            1,
            4,
            4
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
                labels: ["Red", "Grey", "Yellow", "Green", "Blue"],
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

        window.onload = function() {
            var ctx2 = document.getElementById('canvas2').getContext("2d");
            new Chart(ctx2, myChart2);
        };
    </script> -->
</body>

</html>