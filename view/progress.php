<head>
    <link rel="stylesheet" href="view/style/progress.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="view/JS/progress.js"></script>
    <title>Progress</title>
</head>
<body>

    <div class="back_button">
        <a href="profile"><i class="fas fa-chevron-left">  Back</i></a>
    </div>
    <?php
        //var_dump($result);
    ?>
    <div class="flex_container">
        <div class="logo"><img src="view/assets/logo_dark.png" alt=""></div>
        <?php $tema= $result[0]->getTema() ;?>
        <div class="your">YOUR PROGRESS IN <?php echo "$tema"; ?></div>
        <?php $temp= $result[0]->getPersentase() ?>
        <script>var  persen = <?php echo($temp)?></script>
        <div class="progress"><?php echo number_format((float)$temp,2,',','');?>%</div>
        <div class="progress_bar"><div class="progress_fill"></div></div>
        <form action="progress" name="progressInput" method="POST">
            <label for="progressInputText">Progress: </label>
            <input type="number" name="progressInputText" step="0.01">
            <button type="submit" class="add_progress">SUBMIT</button>
        </form>
        
    </div>
</body>
</html>