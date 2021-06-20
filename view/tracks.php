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
            <fieldset>
                <button class="region_accordion">Select Region</button>
                <div class="region_panel">
                    <a href="#">Region1</a>
                    <a href="#">Region2</a>
                    <a href="#">Region3</a>
                    <a href="#">Region4</a>
                    <a href="#">Region5</a>
                </div>
                <label for="">MIN : </label>
                <input type="text">
                <br>
                <label for="">MAX : </label>
                <input type="text">
            </fieldset>
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

            <?php foreach ($result as $key => $row) {
            ?>
            
           
             <!-- <a href="trackpage" class="trackForm">  -->
                

                    <div class="grid_track_card" >
                     <form action="trackpage" method="post" class="trackForm" >
                        <div class="card_image"><?php echo '<img class="inside_image" src="data:image/jpg;base64,' . base64_encode($row->getGambar()) . '"/>' ?></div>
                        <div class="card_price"><?php echo $row->getHarga() . ' Rp' ?></div>
                        <div class="card_distance"><?php echo $row->getJarak() ?></div>
                        <div class="card_name"><?php echo $row->getTema() ?></div>

                        <input type="text" value="<?php echo $row->getTema()?>" name="tema">
                     </form>
                    </div>
                
               
             <!-- </a>  -->
               
            <?php } ?>

           

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

    <script defer src="view/JS/tracks.js"></script>

</body>