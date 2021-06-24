<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
    <script src="view/JS/signup.js"></script>
</head>

<body>

<header>
    <div class="logo">
        <a href="landing"><img src="view/assets/logo_white_nav.png" alt="LOGO"></a>
    </div>


    <nav>
        <a class="nav_link" href="login" id="Login_btn"><b>Log In</b></a>
        <a class="nav_link" href="signup" id="SignUp_btn"><b>Sign Up</b></a>
        <a class="nav_link" href="tracks" id="Tracks_btn"><b>Tracks</b></a>
        <a class="nav_link" href="profile" id="Profile_btn"><b>Profile</b></a>
        <a class="nav_link" href="logout" id="Logout_btn"><b>Logout</b></a>
        <a class="nav_link" href="topUp" id="Wallet_btn"><b>Wallet</b></a>
        <!-- <a class="nav_link" href="logoutAdmin" id="Logout_Admin"><b>Logout</b></a> -->
    </nav>
</header>
        
    <?php
    echo $content;
    ?>

    <!-- <div id="footer">
        <h4>Virtual Marathon 2021, all rights not reserved</h4>
        <h5 id="ig">instagram</h5>
    </div> -->

    <script defer src="view/JS/navbar.js"></script>
</body>

</html>