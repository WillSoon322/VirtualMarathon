<html>
   
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/style/landing_style.css">
    <link rel="stylesheet" href="view/style/style.css">
    <link rel="stylesheet" href="view/style/navbar.css">
    <title>Document</title>
</head>

<body>
<header>
        <div class="nav_top">
            <img src="assets/logo.png" alt="Logo" class="logo">
            <button class="nav_button" id="sign_in">Sign In</button>
            <button class="nav_button" id="sign_up">Sign Up</button>
        </div>
        <div class="nav_bot">
            <ul>
                <li>EVENTS</li>
                <li>TRACKS</li>
                <li>OUR ACHIEVEMENT</li>
                <li>ABOUT US</li>
            </ul>
        </div>
    </header>

    <?php
        echo $content
    ?>

    <div id="footer">
         <h4>Virtual Marathon 2021, all rights not reserved</h4>
         <h5 id="ig">instagram</h5>
    </div>
</body>
</html>
