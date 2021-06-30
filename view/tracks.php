<head>
    <link rel="stylesheet" href="view/style/tracks.css">
    <title>Tracks</title>
</head>

<body>

    <div class="track_container">
        <div class="carousel">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
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
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                </div>
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
            </div>
        </div>
        <div class="page_div">
            <?php
            if (isset($result[2])) {
                //require "pagination.php";
                for ($i = 1; $i <= $result[2]; $i++) { ?>
                    <div class="page">
                        <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </div>
                <?php  } ?>



            <?php }
            ?>
        </div>



        <div class="grid_container">

            <div class="grid_track_card">
                <fieldset>
                    <form action="tracks" method="POST">
                        <a href="tracks">Reset</a>
                        <button class="region_accordion">Select Region</button>
                        <div class="region_panel">

                            <?php foreach ($regionList as $reg) {
                            ?>
                                <a href="#"><?php echo $reg['region']; ?></a>
                            <?php } ?>
                        </div>
                        <input type="text" name="namaTrack" style="display: none;">
                        <label for="">MIN : </label>
                        <input type="text" name="min" value="0">
                        <br>
                        <label for="">MAX : </label>
                        <input type="text" name="max" value="100">
                        <br>
                        <label for="searchTrack">Search : </label>
                        <input type="text" name="searchTrack" id="keyword">
                        <button id="trackUtil_btn">Search</button>
                    </form>
                </fieldset>
            </div>



            <?php
            foreach ($result[0] as $key => $row) {
            ?>
                <div class="grid_track_card">
                    <form action="trackpage" method="post" class="trackForm">
                        <div class="card_image"><img class="inside_image" src="<?php echo $row->getGambar() ?>" alt=""></div>
                        <div class="card_price"><?php echo $row->getHarga() . ' Rp' ?></div>
                        <div class="card_distance"><?php echo $row->getJarak() ?></div>
                        <div class="card_name"><?php echo $row->getTema() ?></div>
                        <input type="text" value="<?php echo $row->getTema() ?>" name="tema">
                    </form>
                </div>

                <!-- div class="card_image"><?php //echo '<img class="inside_image" src="data:image/jpg;base64,' . base64_encode($row->getGambar()) . '"/>' 
                                            ?></div> -->


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