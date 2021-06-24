<head>
    <link rel="stylesheet" href="view/style/ubahtrack.css">
    <title>Virtual Marathon Signup</title>
</head>

<header>
    <div class="logo">
        <h1>LOGO</h1>
    </div>


    <nav>
        <a class="nav_link" href="landing"><b>Home</b></a>
        <a class="nav_link" href="tracks"><b>Tracks</b></a>
        <a class="nav_link" href="login"><b>Log In</b></a>
        <a class="nav_link" href="signup"><b>Sign Up</b></a>
    </nav>
</header>
<img class="back" src="view/assets/bg.jpg" alt="">
<div class="track_box">
    <div class="ubah_track_box">
        <form method="POST" action="changeTrack">
            
            <input class="text_input" type="text" name="track">
            <label class="text_label" for="track">Nama Track: </label> <br>

           
            <input class="text_input" type="text" name="trackbaru">
            <label class="text_label" for="username">Nama Baru : </label>
            
            
            <input class="text_input" type="text" name="harga">
            <label class="text_label" for="harga">Harga Baru: </label>
            

            <a class="text_label">Foto Track Baru:</a>
            <b class="text_input">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit"> <br><br>
            </b>
            <a class="text_label">Foto Medali Baru:</a>
            <b class="text_input">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit"> <br><br>
            </b>
            <a class="text_label">Foto Badge Baru:</a>
            <b class="text_input">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit"> <br><br>
            </b>
            <div class="button_box">
                <button>Ubah Track</button>
            </div>
    </div>

    </form>
</div>




</html>