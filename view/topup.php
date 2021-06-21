<head>
    <link rel="stylesheet" href="view/style/topup.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <div class="scroll-container">
        <section class="payment_method first">
            <div class="section_img">
                <img src="view/assets/payment1.png" alt="">
            </div>
            <div class="section_panel right">
                <div class="panel">
                    <div class="panel_title">
                        CHOOSE YOUR PAYMENT METHOD
                    </div>
                    <div class="panel_content">
                        <div class="method_grid">
                            <button class="method_item" id="OVO">OVO</button>
                            <button class="method_item">GOPAY</button>
                            <button class="method_item">JENIUS</button>
                            <button class="method_item">BCA</button>
                            <button class="method_item">BRI</button>
                            <button class="method_item">MEGA</button>
                            <button class="method_item">OCBC</button>
                            <button class="method_item"></button>
                            <button class="method_item"></button>
                            <button class="method_item"></button>
                            <button class="method_item"></button>
                            <button class="method_item"></button>
                        </div>

                        <input class="payment_confirm" type="text" disabled>
                        <a class="next1" href="#ammount">NEXT</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="payment_ammount second" id="ammount">
            <div class="section_panel left">
                <div class="panel">
                    <div class="panel_title">
                            <input type="number" method="post" action="confirmation" class="ammount_input">
                        </form>
                    </div>
                    <div class="next2" class="panel_content">
                        <div class="vertical_line"></div>
                    </div>
                </div>
            </div>
            <div class="section_img">
                <img src="view/assets/payment2.png" alt="">
            </div>
        </section>
        <section class="payment_email third" id="confirmation">
            <div class="section_img">
                <img src="view/assets/payment3.png" alt="">
            </div>
            <div class="section_panel right">
                <div class="panel">
                    <div class="panel_title">
                        YOUR ORDER
                    </div>
                    <div class="panel_content">
                        <div class="vertical_line"></div>
                        <form action="topup" method="POST">
                            <input type="text" id="confirm_method" name="confirm_method" readonly>
                            <input type="text" id="confirm_ammount" name="confirm_ammount" readonly>
                            <button type="submit">CONFIRM</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="payment_ammount second" id="ammount">
            <div class="section_panel left">
                <div class="panel">
                    <div class="panel_title">
                    <form action="">
                        <input type="file">
                    </form>
                    </div>
                </div>
            </div>
            <div class="section_img">
                <img src="view/assets/payment2.png" alt="">
            </div>
        </section>
    </div>

    <script defer src="view/JS/topUp.js"></script>
</body>

</html>