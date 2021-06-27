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
                <a class="nav_link" href="login"><b>Log In</b></a>
                <a class="nav_link" href="signup"><b>Sign Up</b></a>
                <a class="nav_link" href="tracks"><b>Tracks</b></a>
            </nav>
        </header>
        <div class="carousel_container">
            <div class="overlay"></div>
            <img src="view/assets/1.jpg" alt="">
        </div>
    </section>
    <section class="section">
        <div class="mini_about">
            <img src="view/assets/logo_white_small.png" alt="">
            <div class="story">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium facilis minima inventore sed optio pariatur aut cupiditate asperiores harum consequatur magnam dolore, nobis temporibus at quidem similique nihil non quae.</div>
            <a class="about" href="aboutus">LEARN MORE</a>
        </div>
    </section>
    <section class="section">
        <div class="popular_sect">
            <div class="pop_title"><b> POPULAR TRACK </b></div>
            <hr>
            <div class="pop_tagline">some tagline put here</div>
            <div class="pop_top3">
                <?php foreach ($result as $key => $row) {
                ?>
                    <div class="grid_track_card">
                        <div class="card_image"><img src="<?php echo $row->getGambar()?>" alt=""></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</div>

<script src="view/JS/landingpage.js"></script>
< <script src="view/JS/landingpage.js">
    </script>