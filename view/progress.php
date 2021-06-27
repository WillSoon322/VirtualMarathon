<head>
    <link rel="stylesheet" href="view/style/progress.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="view/JS/progress.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="dim_overlay"></div>
    <div class="modal">
        <button class="exit_button"> X </button>
        <h1>DISTANCE</h1>
        <input type="text">
        <button class="submit_button" type="submit">SUBMIT</button>
    </div>

    <div class="back_button">
        <i class="fas fa-chevron-left">  Back</i>
    </div>
    <?php
        //var_dump($result);
    ?>
    <div class="flex_container">
        <div class="logo"><img src="view/assets/logo_dark.png" alt=""></div>
        <?php $tema= $result[0]->getTema() ;?>
        <div class="your">YOUR PROGRESS IN <?php echo "$tema"; ?></div>
        <?php $temp= $result[0]->getPersentase() ?>
        <div class="progress"><?php echo number_format((float)$temp,2,',','');?>%</div>
        <div class="progress_bar">BAR</div>
        <form action="progress" name="progressInput" method="POST">
            <label for="progressInputText">Progress: </label>
            <input type="number" name="progressInputText" >
            <button type="submit" class="add_progress">SUBMIT</button>
        </form>
        
    </div>
</body>
</html>