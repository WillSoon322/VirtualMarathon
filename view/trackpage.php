<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/style/trackpage.css">
    <title>Document</title>
</head>
<?php
//session_start();
//var_dump($result);
//var_dump($result);
?>
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
        <div class="top_part">
        <!-- <div class="flag"><img src="view/assets/flag/japan.gif" alt=""></div> -->
        <?php echo '<img class="main_image" src="data:image/jpg;base64,' . base64_encode($result[0]->getGambar()) . '"/>' ?>
            <div class="main_atribute">
                <div class="main_badge"><img src="view/assets/badge/mountain1.png" alt="badge"></div>
                <div class="main_medal"><img src="view/assets/medal/japan.png" alt="medal"></div>
            </div>
            <div class="bar"></div>
        </div>

        <div class="bottom_part">
            <div class="bottom_title"></div>
            <div class="bottom_title">
                <?php
                    echo '<h1>'.$result[0]->getTema().' - '.$result[0]->getRegion().'</h1>';
                    
                ?>
               
            </div>
            <br>
            <hr>
            <div class="bottom_desc">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, aspernatur. Esse, ut, odit non nobis corporis quam quod, tempora adipisci eos cumque in! Perferendis reiciendis nisi ducimus eaque fugiat ipsa!
                <br><br><br>
                <hr>
                <div>SOME OTHER RANDOM STUFF</div>
                <div>SOME OTHER RANDOM STUFF</div>
                <div>SOME OTHER RANDOM STUFF</div>
                <div>SOME OTHER RANDOM STUFF</div>

                <div class="get_track">
                     <?php
                        if(isset($_SESSION["loginStatus"])){
                            if($_SESSION["loginStatus"]==true){
                                //var_dump($_SESSION["pemilikTrack"]);
                                //var_dump($_POST["tema"]);
                                if(isset($_SESSION["pemilikTrack"])){
                                    if($_SESSION["pemilikTrack"]==true){
                                        echo "<a href=".'progress'.">ADD PROGRESS</a>";
                                        $_SESSION["trackDestination"]=$_POST["tema"];
                                    }
                                    else{
                                        echo '<a href="buyTrack">GET THIS TRACK</a>';
                                        //echo "GET THIS TRACK";
                                    }
                                }
                            }
                        }
                        else{
                            echo '<a href="login">LOG IN TO GET THIS TRACK</a>';
                            //echo "LOG IN TO GET THIS TRACK";
                        }
                     ?>
                    
                </div>
            </div>
            <div class="bottom_statistic">
                statistic
            </div>
        </div>
    </div>
   
</body>