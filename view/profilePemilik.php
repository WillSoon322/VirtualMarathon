
<head>
    <link rel="stylesheet" href="view/style/profile.css">
    <title>Profile_Pemilik</title>
</head>


<body>
    <?php
        //session_start();
        
    ?>
    <div class="content">
        <div class="user_info">
            <div class="user_info_picture">
            <?php
                    // if(isset($_SESSION["pemilik"]["gambarPemilik"])&&($_SESSION["pemilik"]["gambarPemilik"]!=NULL)&&($_SESSION["pemilik"]["gambarPemilik"]!='NULL')){
                    //     $dp=$_SESSION["pemilik"]["gambarPemilik"];
                        
                    // }
                    // else{
                    //     $dp="view/assets/user.png";
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
                    // if(isset($_SESSION["pemilik"]["usernamePemilik"])){
                    //     $user=$_SESSION["pemilik"]["usernamePemilik"];
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
            <button onclick="laporan()" id="goToValidate">Lihat Laporan</button>
            <button onclick="addTrack()" id="goToAddTrack">Masukan Track Baru</button>
            <button onclick="changeTrack()" id="goToUbahTrack">Ubah Track</button>
            <button onclick="addAdmin()" id="goToAddAdmin">Add Admin</button>
            <script>
                function laporan(){
                    location.href="laporan";
                }
                function addTrack(){
                    location.href="addTrack";
                }
                function changeTrack(){
                    location.href="changeTrack";
                }
                function addAdmin(){
                    location.href="addAdmin";
                }
            </script>
        </div>
    </div>
</body>