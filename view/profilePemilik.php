
<head>
    <link rel="stylesheet" href="view/style/profile.css">
    <title>Profile_Pemilik</title>
</head>


<body>
    <?php
        session_start();
        
    ?>
    <div class="content">
        <div class="user_info">
            <div class="user_info_picture">
            <?php
                    if(isset($_SESSION["gambarPemilik"])){
                        $user=$_SESSION["gambarPemilik"];
                        echo  '<img class="user_info_picture" src="data:image/jpg;base64,'.base64_encode($user).'"/>';
                    }
                ?>
            </div>
            <div class="info_1">
                <?php
                    if(isset($_SESSION["usernamePemilik"])){
                        $user=$_SESSION["usernamePemilik"];
                        echo "<h2> '$user' </h2>";
                    }
                ?>
            </div>
            <br><br><br><br>
            <hr>
            <button onclick="laporan()" id="goToValidate">Lihat Laporan</button>
            <button onclick="addTrack()" id="goToAddTrack">Masukan Track Baru</button>
            <button onclick="changeTrack()" id="goToUbahTrack">Ubah Track</button>
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
            </script>
        </div>
    </div>
</body>