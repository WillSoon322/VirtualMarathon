<head>
    <link rel="stylesheet" href="view/style/topup.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    

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
                    <h2>Choose the ammount for your Top-Up</h2>
                            <input type="number" method="post" action="confirmation" class="ammount_input">
                        </form>
                    </div>
                    <div class="next2" class="panel_content">
                        <a href="#confirmation">NEXT</a>
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
                        <form action="topup" method="POST" enctype="multipart/form-data">
                            <input type="text" id="confirm_method" name="confirm_method" readonly>
                            <input type="text" id="confirm_ammount" name="confirm_ammount" readonly>
                            <input type="file" id="bukti" name="bukti">
                            <button type="submit">CONFIRM</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="payment_ammount second" id="ammount">
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
        </section> -->
    </div>

    <script defer src="view/JS/topUp.js"></script>
</body>

</html>