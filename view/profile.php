<head>
    <link rel="stylesheet" href="view/style/profile.css">
    <script defer src="view/JS/profile.js"></script>
    <title>Profile</title>
</head>


<body>
    <?php //var_dump($result)?>

    <div class="content">
        <?php
        function pindah()
        {
        }
        ?>
        <div class="user_info">
            <div class="setting">
                <i class="fas fa-cog"></i>
            </div>
            <div class="user_info_picture">
                <?php
                    // if (isset($_SESSION["peserta"]["gambar"]) && ($_SESSION["peserta"]["gambar"] != NULL) && ($_SESSION["peserta"]["gambar"] != 'NULL')) {
                    //     $dp = $_SESSION["peserta"]["gambar"];
                    //     //var_dump($dp);
                    // } else {
                    //     $dp = "view/assets/user.png";
                    //     //var_dump($dp);
                    // } 
                    if(isset($result[3])){
                        $dp=$result[3][0]->getGambar();
                    }
                    else{
                        $dp="view/assets/user.png";
                    }
                ?>
                <img src="<?php echo $dp; ?>" alt="" class>
            </div>
            <div class="info_1">
                <?php
                // if (isset($_SESSION["peserta"]["nama"])) {
                //     $user = $_SESSION["peserta"]["nama"];
                //     echo "<h2> $user </h2>";
                // }
                if(isset($result[4])){
                    $nama=$result[4][0]->getNama();
                    echo "<h2>$nama</h2>";
                }
                
                ?>
            </div>
            <hr>
            <br>

            <div class="detil_info info_umur">
                <?php
                // if (isset($_SESSION["peserta"]["usia"])) {
                //     $user = $_SESSION["peserta"]["usia"];
                //     echo "<h2> Usia: $user </h2>";
                // }
                if(isset($result[4])){
                    $usia=$result[4][0]->getusia();
                    echo "<h2>$usia</h2>";
                }
                
                ?>
            </div>
            <div class="detil_info info_gender">
                <?php
                // if (isset($_SESSION["peserta"]["Gender"])) {
                //     $user = $_SESSION["peserta"]["Gender"];
                //     echo "<h2> Gender: $user </h2>";
                // }
                if(isset($result[4])){
                    $nama=$result[4][0]->getGender();
                    echo "<h2>$nama</h2>";
                }
                
                ?>
            </div>
            <div class="detil_info info_alamat">
                <?php
                // if (isset($_SESSION["peserta"]["Alamat"])) {
                //     $user = $_SESSION["peserta"]["Alamat"];
                //     echo "<h2> Alamat: $user </h2>";
                // }
                if(isset($result[4])){
                    $nama=$result[4][0]->getAlamat();
                    echo"<h2>$nama</h2>";
                }
               
                ?>
            </div>
            <div class="detil_info info_saldo">
                <?php
                if (isset($_SESSION["peserta"]["saldo"])) {
                    $user = $_SESSION["peserta"]["saldo"];
                    echo "<h2> Saldo: $user </h2>";
                }
                ?>
            </div>
        </div>
        <div class="current_track">
            <!-- //img tadinya di sini! -->


            <img class="currImg" src="<?php echo $result[2] ?>" alt="">
            <div class="go_button">
                <form action="trackpage" method="POST" class="buttonForm">
                    <?php 
                        if (isset($_SESSION["peserta"]["progress"])==false){
                        $progres="";
                        }
                        else{
                            $progres=$_SESSION["peserta"]["progress"];
                        }
                    ?>
                    <input type="text" name="tema" class="inputTrack" value="<?php echo $progres ?>" readonly>
                    <button onclick="submit()" class="myButton">GO!!</button>
                </form>
            </div>
        </div>
        <div class="owned_medal">
            <!-- <div class="medal"><img class="badge_img" src="view/assets/mountain1.png" alt=""></div> -->
            <?php foreach ($result[0] as $key => $row) {
            ?>
                <div class="medal"><img src="<?php echo $row->getGambarBadge() ?>" alt=""></div>
            <?php } ?>

        </div>
        <div class="API_weather">
            <div class="trackList">
                <h2>Track yang dimiliki:</h2><br><br>
                <?php foreach ($result[1] as $key => $row) {
                ?>
                    <div class="progress_per">
                        <div class="bar_slot">
                            <div class="bar_fill"></div>
                        </div>

                        <h3><?php echo $row->getTema(); ?></h3>
                        <div class="pers" style="display: none;"><?php echo $row->getPersentase(); ?></div>
                        <h3 class="pesentase"><?php echo $row->getPersentase(); ?>%<br><br></h3>
                    </div>
                <?php } ?>

            </div>
        </div>
        <div class="statistic">
            <div id="openweathermap-widget-21"></div>
            <script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script>
            <script>
                window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];
                window.myWidgetParam.push({
                    id: 21,
                    cityid: '1650357',
                    appid: 'ebe0a8f921d74fd22be5420b94a8a607',
                    units: 'metric',
                    containerid: 'openweathermap-widget-21',
                });
                (function() {
                    var script = document.createElement('script');
                    script.async = true;
                    script.charset = "utf-8";
                    script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(script, s);
                })();



                let links = document.querySelector('.trackList').children
                for (let a of links) {
                    a.addEventListener('click', function() {
                        event.preventDefault();
                        console.log("<?php echo pindah() ?>");
                        window.location.href = "progress";
                    })
                }
            </script>
        </div>



    </div>

    <div class="over">
        <div class="box">
            <form action="profile" method="POST" enctype="multipart/form-data">
                <input type="text" name="namabaru">
                <label for="namabaru">Nama Baru: </label>
                <br>
                <input type="text" name="alamatbaru">
                <label for="alamatbaru">Alamat Baru: </label>
                <br>
                <input type="text" name="passwordbaru">
                <label for="passwordbaru">New password : </label>
                <br>
                <input type="text" name="re-passwordbaru">
                <label for="re-passwordbaru">Retype new password : </label>
                <br>
                <input type="file" name="gambarbaru" id="">
                <br>
                <button>Change</button>
            </form>
            <br> <br> <br><br> <br> <br><br> <br> <br>
            <button onclick="deletes()">Delete Account</button>
            <script>
                function deletes() {
                    location.href = "delete";
                }
            </script>
        </div>
    </div>
</body>