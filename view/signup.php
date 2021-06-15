<head>
    <link rel="stylesheet" href="view/style/signup.css">
    <title>Virtual Marathon Signup</title>
</head>

    <div class="login_box">
        <div class="login_input_box">
        <form method="POST" action="signup">
          <input class="text_input" type="text" name="username">
            <label class="text_label" for="Username">Username : </label>

            <input class="text_input" type="text" name="name">
            <label class="text_label" for="Name">Name : </label>

            <select class="text_input" name="gender" id="gender" >
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
                <option value="else">Lainnya</option>
            </select>
            <label class="text_label" for="gender">Gender : </label>
            
            <input class="text_input" type="number" name="age" id="umur" >
            <label class="text_label" for="age">Age : </label>

            <input class="text_input" type="text" name="address">
            <label class="text_label" for="Address">Address : </label>

            <input class="text_input" type="number" name="phone" id="phone" >
            <label class="text_label" for="phone">Phone Number : </label>

            <input class="text_input" type="password" name="password">
            <label class="text_label" for="password">Password : </label>

            <input class="text_input" type="password" name="re_password">
            <label class="text_label" for="re_password">Retype Password : </label>

            <label id="remember_label" for="Agreement" name="agreement">I agree to <a href="#">Agreement</a></label>
            <input id="remember_check" type="checkbox" name="agreement">
        </div>
        <div class="button_box">
            <button>Sign Up</button>
        </div>
    
        </form>
     </div>
            

</html>