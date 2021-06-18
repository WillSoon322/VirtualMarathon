<head>
    <link rel="stylesheet" href="view/style/landing_style.css">
    <title>Virtual Marathon Landing Page</title>
</head>

<div class="scroll_container">

        <section class="section">
                <div class="info_left">
                    <h1 class="info_name">RUNNING THE WORLD</h1>
                    <div class="act">
                        Start Your JOURNEY
                    </div>
                </div>
            </div>

            <div class="carousel_container">
                <div class="overlay"></div>
                <img src="view/assets/1.jpg" alt="">
            </div>

           

        </section>
       
    </div>


    <div class="grid_container">
        <?php foreach($result as $key => $row) {
                ?>
                <div class="grid_track_card">
                <div class="card_image"><?php echo '<img class="inside_image" src="data:image/jpg;base64,'.base64_encode($row->getGambar()).'"/>' ?></div>
                <!-- //CLASS NAME NYA DIGANTI,  BUKAN CARD PRICE TAPI PENGIKUT -->
                <div class="pengikut"><?php echo $result["pengikut"] ?></div>    
                <div class="card_name"><?php echo $row->getTema()?></div>
            </div>
            <?php } ?>
           </div>
    <script src="view/JS/landingpage.js"></script>