
<head>
    <link rel="stylesheet" href="view/style/profile.css">
    <title>Profile_Admin</title>
</head>


<body>
    <?php
        //session_start();
        
    ?>

    <div class="content">
        <div class="user_info">
            <div class="user_info_picture">
            <?php
                    // if(isset($_SESSION["admin"]["gambarAdmin"])){
                    //     $user=$_SESSION["admin"]["gambarAdmin"];
                    //     echo  '<img class="user_info_picture" src="data:image/jpg;base64,'.base64_encode($user).'"/>';
                    // }
                    if(isset($result[0])&&$result[0]->getGambar()!=NULL){
                        $gambar=$result[0]->getGambar();
                    }
                    else{
                        $gambar="view/assets/user.png";
                    }
                ?>
                <img src="<?php echo $gambar?>" alt="">
            </div>
            <div class="info_1">
                <?php
                    // if(isset($_SESSION["admin"]["usernameAdmin"])){
                    //     $user=$_SESSION["admin"]["usernameAdmin"];
                    //     echo "<h2> $user </h2>";
                    // }
                    if(isset($result[0])&&$result[0]->getUsername()!=NULL){
                        $nama=$result[0]->getUsername();
                    }
                    echo "<h2>$nama</h2>";
                ?>
                
            </div>
            <br><br><br><br>
            <hr>
            <button onclick="validatePage()" id="goToValidate">Validate</button>
            <button onclick="statusPage()" id="goToStats">Lihat Status Peserta</button>
            <script>
                function validatePage(){
                    location.href="validasi";
                }
                function statusPage(){
                    location.href="statusPeserta";
                }
            </script>
        </div>
    </div>
</body>