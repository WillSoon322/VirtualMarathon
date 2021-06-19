<html lang="en">

<head>
    <link rel="stylesheet" href="view/style/login.css">
    <title>Virtual Marathon Login</title>
</head>

<body>
    <header>
        <div class="logo">
            <h1>LOGO</h1>
        </div>


        <nav>
            <a class="nav_link" href="tracks"><b>Tracks</b></a>
            <a class="nav_link" href="login"><b>Log In</b></a>
            <a class="nav_link" href="signup"><b>Sign Up</b></a>
        </nav>
    </header>
    <img class="back" src="view/assets/login_big.jpg" alt="">
    <div class="login_box">
        <div class="login_input_box">
            <img src="view/assets/login_small.png" alt="gambar">
            <form action="login" method="post">
                <input class="text_input" type="text" name="name">
                <label class="text_label" for="name">Username : </label>

                <input class="text_input" type="password" name="password">
                <label class="text_label" for="Password">Password : </label>

                <label id="remember_label" for="remember">Remember Me</label>
                <input id="remember_check" type="checkbox" name="remember">
                <div class="button_box">
            <button type="submit">Log In</button>
            <button href="signup">Sign Up</button>
        </div>
            </form>
            
        </div>
        
    </div>
</body>

</html>