<head>
    <link rel="stylesheet" href="view/style/landing_style.css">
    <title>Virtual Marathon Landing Page</title>
</head>



<div class="scroll_container">

    <section class="home_left section">



        <header>
            <div class="logo">
                <h1>LOGO</h1>
            </div>


            <nav>
                <a class="nav_link" href="tracks"><b>Tracks</b></a>
                <a class="nav_link" href="login"><b>Log In</b></a>
                <a class="nav_link" href="signup"><b>Sign Up</b></a>
                <a class="nav_link" href="profile"><b>Profile</b></a>
            </nav>
        </header>
        <div class="carousel_container">
            <div class="overlay"></div>
            <img src="view/assets/1.jpg" alt="">
        </div>
    </section>
    <section class="section">
        <div class="popular_sect">
            <div class="pop_title"><b> POPULAR TRACK </b></div><hr>
            <div class="pop_tagline">some tagline put here</div>
            <div class="pop_top3">
                <div class="t2nd">2nd</div>
                <div class="t1st">1st</div>
                <div class="t3rd">3rd</div>
            </div>
        </div>
    </section>
</div>

<script src="view/JS/landingpage.js"></script>
    < <?php foreach($result as $key => $row) {
                ?>

            <div class="grid_track_card">
                <div class="card_image"><?php echo '<img class="inside_image" src="data:image/jpg;base64,'.base64_encode($row->getGambar()).'"/>' ?></div>
                <div class="card_price"><?php echo $row->getHarga().' Rp' ?></div>
                <div class="card_distance"><?php echo $row->getJarak() ?></div>
                <div class="card_name"><?php echo $row->getTema()?></div>
            </div>
     <?php } ?>
    <script src="view/JS/landingpage.js"></script>
