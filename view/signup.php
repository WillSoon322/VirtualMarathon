<head>
    <link rel="stylesheet" href="view/style/signup.css">
    <script defer src="view/JS/signup.js"></script>
    <title>SignUp</title>
</head>


<div class="sign_up_right">
    <img src="view/assets/signup_big.jpg" alt="">
</div>
<div class="login_box">
    <div class="login_input_box">
        <form method="POST" action="signup" autocomplete="off">
            <input class="text_input" type="email" name="email" required>
            <label class="text_label" for="email">Email : </label>

            <input class="text_input" type="text" name="username" required>
            <label class="text_label" for="username">Username : </label>

            <input class="text_input" type="text" name="name" required>
            <label class="text_label" for="name">Name : </label>

            <select class="text_input" name="gender" id="gender" required>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
                <option value="else">Lainnya</option>
            </select>
            <label class="text_label" for="gender">Gender : </label>

            <input class="text_input" type="number" name="age" id="umur" required>
            <label class="text_label" for="age">Age : </label>

            <input class="text_input" type="text" name="address" required>
            <label class="text_label" for="Address">Address : </label>

            <input class="text_input" type="text" name="city" required style="display: none;">
            <label class="text_label" for="city" style="display: none;">City : </label>

            <!-- <input class="text_input" type="text" name="country" required style="display: none;">
            <label class="text_label" for="country" style="display: none;">Country : </label> -->

            <input class="text_input" type="number" name="phone" id="phone" required>
            <label class="text_label" for="phone">Phone Number : </label>

            <input class="text_input" type="password" name="password" required>
            <label class="text_label" for="password">Password : </label>

            <input class="text_input" type="password" name="re_password" required>
            <label class="text_label" for="re_password">Retype Password : </label>

            <label id="remember_label" for="Agreement" name="agreement">I agree to <a href="#">Agreement</a></label>
            <input id="remember_check" type="checkbox" name="agreement" required    >
            <button>Sign Up</button>
    </div>

    </form>
</div>