<html lang="en">

<head>
    <link rel="stylesheet" href="view/style/login.css">
    <title>Virtual Marathon Admin Login</title>
</head>

<body>
    <header>
        <div class="logo">
            <h1>LOGO</h1>
        </div>

    </header>
    <img class="back" src="view/assets/login_big.jpg" alt="">
    <div class="login_box">
        <div class="login_input_box">
            <img src="view/assets/adminLogin.png" alt="gambar">
            <form action="loginAdmin" method="post">
                <input class="text_input" type="text" name="name">
                <label class="text_label" for="name">Username : </label>

                <input class="text_input" type="password" name="password">
                <label class="text_label" for="Password">Password : </label>

                
                <div class="button_box">
                <br>
            <button type="submit">Log In</button>
        </div>
            </form>
            
        </div>
        
    </div>
</body>

</html>