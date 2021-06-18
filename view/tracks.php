<head>
    <link rel="stylesheet" href="view/style/tracks.css">
    <title>Tracks</title>
</head>

<body>
    <header>
        <div class="logo">
            <h1>LOGO</h1>
        </div>

          <?php
            // foreach($result as $key =>$row){
            //     echo $row->getGambar();
            // }
           // var_dump($result);
        ?>  

        <nav>
            <div class="nav_link"><a href="login"><b>Log In</b></a></div>
            <div class="nav_link"><a href="signup"><b>Sign Up</b></a></div>
            
        </nav>

        <div class="track_utils">
            UTILS
        </div>
    </header>

    <div class="track_container">
        <div class="carousel">
            <!--image slider start-->
            <div class="slider">
                <div class="slides">
                    <!--radio buttons start-->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <!--radio buttons end-->
                    <!--slide images start-->
                    <div class="slide first">
                        <img src="view/assets/1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="view/assets/2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="view/assets/3.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="view/assets/4.jpg" alt="">
                    </div>
                    <!--slide images end-->
                    <!--automatic navigation start-->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                    <!--automatic navigation end-->
                </div>
                <!--manual navigation start-->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
                <!--manual navigation end-->
            </div>
            <!--image slider end-->
        </div>
        <div class="grid_container">
            <div class="grid_track_card">
                <div class="card_image"><?php echo '<img class="inside_image" src="data:image/jpg;base64,'.base64_encode($result[0]->getGambar()).'"/>' ?></div>
                <div class="card_price"><?php echo $result[0]->getHarga().' Rp' ?></div>
                <div class="card_distance"><?php echo $result[0]->getJarak() ?></div>
                <div class="card_name"><?php echo $result[0]->getTema()?></div>
            </div>
            <div class="grid_track_card">
                <div class="card_image"><?php echo '<img class="inside_image" src="data:image/jpg;base64,'.base64_encode($result[1]->getGambar()).'"/>' ?></div>
                <div class="card_price"><?php echo $result[1]->getHarga().' Rp' ?></div>
                <div class="card_distance"><?php echo $result[1]->getJarak() ?></div>
                <div class="card_name"><?php echo $result[1]->getTema()?></div>
            </div>
            <div class="grid_track_card">
                <div class="card_image"><?php echo '<img class="inside_image" src="data:image/jpg;base64,'.base64_encode($result[2]->getGambar()).'"/>' ?></div>
                <div class="card_price"><?php echo $result[2]->getHarga().' Rp' ?></div>
                <div class="card_distance"><?php echo $result[2]->getJarak() ?></div>
                <div class="card_name"><?php echo $result[2]->getTema()?></div>
            </div>
            <div class="grid_track_card">
                <div class="card_image">img</div>
                <div class="card_price">price</div>
                <div class="card_distance">distance</div>
                <div class="card_name">name</div>
            </div>
            <div class="grid_track_card">5</div>
            <div class="grid_track_card">6</div>
            <div class="grid_track_card">7</div>
            <div class="grid_track_card">8</div>
            <div class="grid_track_card">9</div>
            <div class="grid_track_card">10</div>
            <div class="grid_track_card">11</div>
            <div class="grid_track_card">12</div>
        </div>
    </div>

    <script type="text/javascript">
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 15000);
    </script>

</body>