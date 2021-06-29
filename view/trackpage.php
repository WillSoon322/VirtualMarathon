<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/style/trackpage.css">
    <title>Document</title>
</head>

<body>

    <div class="content">

        <div class="top_part">
            <!-- <div class="flag"><img src="view/assets/flag/japan.gif" alt=""></div> -->
            <img class="main_image" src="<?php echo $result[0]->getGambar() ?>">
            <div class="main_atribute">
                <div class="main_badge">Badge:<img src="<?php echo $result[0]->getGambarBadge() ?>" alt="badge"></div>

                <div class="main_medal">Medal:<img src="<?php echo $result[0]->getGambarMedal() ?>"></div>
            </div>
            <div class="bar"></div>
        </div>

        <div class="bottom_part">
            <div class="bottom_title"></div>
            <div class="bottom_title">
                <?php
                echo '<h1>' . $result[0]->getTema() . ' - ' . $result[0]->getRegion() . '</h1>';

                ?>

            </div>
            <br>
            <hr>
            <div class="bottom_desc">
                <div class="medalImage"></div>
                <br><br><br>
                <div class="badgeImage"></div>
                <div>
                    <h2>Harga : Rp. <?php echo $result[0]->getHarga(); ?></h2><br>
                    <h2>Jarak : <?php echo $result[0]->getJarak(); ?> KM</h2>
                </div>
                <div class="get_track">
                    <?php
                    if (isset($_SESSION["peserta"]["loginStatus"])) {
                        if ($_SESSION["peserta"]["loginStatus"] == true) {
                            //var_dump($_SESSION["pemilikTrack"]);
                            //var_dump($_POST["tema"]);
                            if (isset($_SESSION["peserta"]["pemilikTrack"])) {
                                if ($_SESSION["peserta"]["pemilikTrack"] == true) {
                                    echo "<a href=" . 'progress' . ">ADD PROGRESS</a>";
                                    $_SESSION["peserta"]["trackDestination"] = $_POST["tema"];
                                } else {
                                    $_SESSION["peserta"]["trackDestination"] = $_POST["tema"];
                                    echo '<a href="buyTrack">GET THIS TRACK</a>';
                                    //echo "GET THIS TRACK";
                                }
                            }
                        }
                    } else {
                        echo '<a href="login">LOG IN TO GET THIS TRACK</a>';
                        //echo "LOG IN TO GET THIS TRACK";
                    }
                    ?>

                </div>
            </div>
            <!-- <div class="bottom_statistic">
                statistic
            </div> -->
        </div>
    </div>

</body>