<head>
    <link rel="stylesheet" href="view/style/landing_style.css">
    <script src="https://kit.fontawesome.com/c3d54056dd.js" crossorigin="anonymous"></script>
    <title>Virtual Marathon Landing Page</title>
</head>



<div class="scroll_container">

    <div class="media_list">
        <ul>
            <li><a href="https://www.instagram.com/"><i class="fab fa-instagram">   Instagram</i></a></li>
            <li><a href="https://www.facebook.com/"><i class="fab fa-facebook">  Facebook</i></li></a>
        </ul>
    </div>

    <section class="home_left section">



        <header>
            <div class="logo">
                <img src="view/assets/logo_white_nav.png" alt="">
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
        <div class="Start">
           <a href="signup"><b> Start Now </b></a>
        </div>
    </section>
    <section class="section">
        <div class="mini_about">
            <img src="view/assets/logo_white_small.png" alt="">
            <div class="story">Virtual Marathon is the best website to help you stay fit by running a marathon virtually.</div>
            <a class="about" href="aboutus">LEARN MORE</a>
        </div>
    </section>
    <section class="section">
        <div class="popular_sect">
            <div class="pop_title"><b> POPULAR TRACK </b></div>
            <hr>
            <div class="pop_tagline"></div>
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