<head>
    <link rel="stylesheet" href="style/ubahtrack.css">
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
<img class="back" src="assets/bg.jpg" alt="">
<div class="track_box">
    <div class="ubah_track_box">
        <form method="POST" action="signup">
            <input class="text_input" type="text" name="track">
            <label class="text_label" for="email">Nama Track: </label>

            <input class="text_input" type="text" name="trackbaru">
            <label class="text_label" for="username">Track Baru : </label>

            <input class="text_input" type="text" name="harga">
            <label class="text_label" for="name">Harga Track: </label>

            <a class="text_label">Foto Track:</a>
            <b class="text_input">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit"> <br><br>
            </b>
            <a class="text_label">Foto Medali:</a>
            <b class="text_input">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit"> <br><br>
            </b>
            <a class="text_label">Foto Badge:</a>
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