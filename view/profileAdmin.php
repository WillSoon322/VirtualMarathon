
<head>
    <link rel="stylesheet" href="view/style/profile.css">
    <title>Document</title>
</head>


<body>
    <?php
        session_start();
        
    ?>
    <header>
        <div class="logo">
            <h1>LOGO</h1>
        </div>


        <nav>
            <a class="nav_link" href="tracks"><b>Tracks</b></a>
            <a class="nav_link" href="logout"><b>Log Out</b></a>
        </nav>
    </header>

    <div class="content">
        <div class="user_info">
            <div class="user_info_picture">
            <?php
                    if(isset($_SESSION["gambarAdmin"])){
                        $user=$_SESSION["gambarAdmin"];
                        echo  '<img class="user_info_picture" src="data:image/jpg;base64,'.base64_encode($user).'"/>';
                    }
                ?>
            </div>
            <div class="info_1">
                <?php
                    if(isset($_SESSION["usernameAdmin"])){
                        $user=$_SESSION["usernameAdmin"];
                        echo "<h2> '$user' </h2>";
                    }
                ?>
            </div>
            <br><br><br><br>
            <hr>
            <button onclick="validatePage()" id="goToValidate">Validate</button>
            <script>
                function validatePage(){
                    location.href="validasi";
                }
            </script>
        </div>
    </div>
</body>