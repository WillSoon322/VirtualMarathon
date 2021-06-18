<head>
    <link rel="stylesheet" href="view/style/profile.css">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="logo">
            <h1>LOGO</h1>
        </div>


        <nav>
            <a class="nav_link" href="tracks"><b>Tracks</b></a>
            <a class="nav_link" href="#"><b>Log Out</b></a>
        </nav>
    </header>

    <div class="content">
        <div class="user_info">
            <div class="user_info_picture">

            </div>
            <div class="info_1">

            </div>
            <hr>
            <br>
            <div class="detil_info info_umur"></div>
            <div class="detil_info info_gender"></div>
            <div class="detil_info info_alamat"></div>
        </div>
        <div class="current_track">

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