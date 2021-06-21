<head>
    <link rel="stylesheet" href="view/style/buyTrack.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
            <?php
            
                if(isset($_SESSION["saldo"])){
                    $saldo=(int)$_SESSION["saldo"];
                }
                $harga=(int)$result[0]->getHarga();
                //echo $harga;
                $saldoAfter=(int) ($saldo-$harga);
                $gambar=$result[0]->getGambar();
                $tema=$result[0]->getTema();
                //echo $tema;
                //echo $_SESSION["trackDestination"];
           ?>
<body>
    <div class="black_bar left"></div>
    <div class="black_bar right"></div>
    <div class="content">
        <div class="left_big_box"><?php echo '<img class="inside_image" src="data:image/jpg;base64,' . base64_encode($gambar) . '"/>' ?></div>
        <div class="right_small_box">
            
            <h1>BUY <?php echo $tema?></h1>=
            <hr>
            <h4>1x access to the track</h4>
            <h4>1x Medal sent to you</h4>
            <h4>1x virtual badge</h4>
            <hr>
            <h2>Total Price : <?php echo $harga?></h2>
            <h2>Your Wallet before: <?php echo $saldo ?> </h2>
            <hr class="count">
            <h2>Your Wallet after: <?php if($saldoAfter<0){
                echo "Insuficient Balance";
            }else{
                echo $saldoAfter;
            }?> </h2>


            <div class="purchase_button">
                <?php 
                    if($saldoAfter<0){
                        echo "<a href=".'topUp'.">".'Top Up Balance'."</a>";
                    }
                    else{
                        echo "<a href=".'payController'.">".'Pay Now'."</a>";
                    }
                ?>
            </div> 
        </div>
    </div>
</body>

</html>