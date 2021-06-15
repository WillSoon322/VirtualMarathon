<head>
    <link rel="stylesheet" href="view/style/signup.css">
    <title>Virtual Marathon Signup</title>
</head>

    <div class="login_box">
        <div class="login_input_box">
            <input class="text_input" type="text">
            <label class="text_label" for="Username">Username : </label>

            <input class="text_input" type="text">
            <label class="text_label" for="Name">Name : </label>

            <select class="text_input" name="Gender" id="gender">
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
                <option value="else">Lainnya</option>
            </select>
            <label class="text_label" for="Gender">Gender : </label>
            
            <input class="text_input" type="number" name="Umur" id="umur">
            <label class="text_label" for="Umur">Age : </label>

            <input class="text_input" type="text">
            <label class="text_label" for="Address">Address : </label>

            <input class="text_input" type="number" name="Phone" id="phone">
            <label class="text_label" for="Umur">Phone Number : </label>

            <input class="text_input" type="password">
            <label class="text_label" for="Password">Password : </label>

            <input class="text_input" type="password">
            <label class="text_label" for="Re_Password">Retype Password : </label>

            <label id="remember_label" for="Agreement">I agree to <a href="#">Agreement</a></label>
            <input id="remember_check" type="checkbox" name="Agreement"">
        </div>
        <div class="button_box">
            <button>Sign Up</button>
        </div>
    </div>

</html>