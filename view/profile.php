
<head>
    <link rel="stylesheet" href="view/style/profile.css">
    <title>Document</title>
</head>


<body>
    <?php
        session_start();
        
    ?>
    <header>
        <div class="logo">
            <h1>LOGO</h1>
        </div>


        <nav>
            <a class="nav_link" href="tracks"><b>Tracks</b></a>
            <a class="nav_link" href="logout"><b>Log Out</b></a>
        </nav>
    </header>

    <div class="content">
        <div class="user_info">
            <div class="user_info_picture">
            <?php
                    if(isset($_SESSION["gambar"])){
                        $user=$_SESSION["gambar"];
                        echo  '<img class="user_info_picture" src="data:image/jpg;base64,'.base64_encode($user).'"/>';
                    }
                ?>
            </div>
            <div class="info_1">
                <?php
                    if(isset($_SESSION["username"])){
                        $user=$_SESSION["username"];
                        echo "<h2> '$user' </h2>";
                    }
                ?>
            </div>
            <hr>
            <br>
            <div class="detil_info info_umur">
            <?php
                    if(isset($_SESSION["usia"])){
                        $user=$_SESSION["usia"];
                        echo "<h2> '$user' </h2>";
                    }
                ?>
            </div>
            <div class="detil_info info_gender">
            <?php
                    if(isset($_SESSION["Gender"])){
                        $user=$_SESSION["Gender"];
                        echo "<h2> '$user' </h2>";
                    }
                ?>
            </div>
            <div class="detil_info info_alamat">
            <?php
                    if(isset($_SESSION["Alamat"])){
                        $user=$_SESSION["Alamat"];
                        echo "<h2> '$user' </h2>";
                    }
                ?>
            </div>
        </div>
        <div class="current_track">
            <div class="go_button">
            <a href="#" class="myButton">GO!!</a>
            </div>
        </div>
        <div class="owned_medal">
            <div class="medal"><img class="badge_img" src="view/assets/mountain1.png" alt=""></div>
            <div class="medal"><img class="badge_img" src="view/assets/mountain1.png" alt=""></div>
            <div class="medal"><img class="badge_img" src="view/assets/mountain1.png" alt=""></div>
            <div class="medal"><img class="badge_img" src="view/assets/mountain1.png" alt=""></div>
            <div class="medal"><img class="badge_img" src="view/assets/mountain1.png" alt=""></div>
            <div class="medal"><img class="badge_img" src="view/assets/mountain1.png" alt=""></div>
            <div class="medal"><img class="badge_img" src="view/assets/mountain1.png" alt=""></div>
            <div class="medal"><img class="badge_img" src="view/assets/mountain1.png" alt=""></div>
            <div class="medal"><img class="badge_img" src="view/assets/mountain1.png" alt=""></div>
        </div>
        <div class="API_weather">
            <div>
                HALO
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
            </script>
        </div>

    </div>
</body>