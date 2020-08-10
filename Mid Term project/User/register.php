<!DOCTYPE html>
<html>
    <style>
        body
        {
            margin: 0;
            padding: 0;
            background: #fff;
        }

    </style>

    <body>
    <?php include('header.php');?>

        <div id="loginin-box">
            <div class="left-box">
                <h1>Sign Up</h1>

                <input type="text" name="username" placeholder="Username*"/>
                <input type="text" name="email" placeholder="Email*"/>
                <input type="password" name="password" placeholder="Password*"/>
                <input type="password" name="password2" placeholder="Retype Password"/>

                <input type="submit" name="signup-button" value="Sign Up"/>
            </div>
            <div class="right-box">
                <span class="signinwith">Sign in With<br/>Social Network</span>

                <button class="social facebook">Log in with Facebook</button>
                <button class="social twitter">Log in with Twitter</button>
                <button class="social google">Log in with Google+</button>
            </div>
        </div>

    <?php include('footer.php');?>
    </body>
</html>