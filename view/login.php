<html lang="en">

<head>
    <link rel="stylesheet" href="view/style/login.css">
    <title>Login</title>
</head>

<body>
    <img class="back" src="view/assets/login_big.jpg" alt="">
    <div class="login_box">
        <div class="login_input_box">
            <img src="view/assets/login_small.png" alt="gambar">
            <form action="login" method="post">
                <input class="text_input" type="text" name="name">
                <label class="text_label" for="name">Username : </label>

                <input class="text_input" type="password" name="password">
                <label class="text_label" for="Password">Password : </label>

                <div class="button_box">
            <button type="submit">Log In</button>
            <button href="signup">Sign Up</button>
        </div>
            </form>
            
        </div>
        
    </div>
</body>

</html>