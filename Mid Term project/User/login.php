<!DOCTYPE html>
<html>
    <style>
      body
        {
            margin: 0;
            padding: 0;
            background: #efefef;
            font-size: 16px;
            color: #777;
            font-family: sans-serif;
            font-weight: 300;
        }
        #login-box
        {
            position: relative;
            margin: 5% auto;
            width: 600px;
            height: 400px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
        }
        div.login
        {
            position: absolute;
            top: 0;
            left: 0;
            box-sizing: border-box;
            padding: 40px;
            width: 300px;
            height: 400px;
        }
        input[type="text"],input[type="password"]
        {
            display: block;
            box-sizing: border-box;
            margin-bottom: 20px;
            padding: 4px;
            width: 220px;
            height: 32px;
            border: none;
            outline: none;
            border-bottom: 1px solid #aaa;
            font-family: sans-serif;
            font-weight: 400;
            font-size: 15px;
            transition: 0.2s ease;
        }
        input[type="submit"]
        {
            margin-bottom: 28px;
            width: 120px;
            height: 32px;
            background: #f44336;
            border: none;
            border-radius: 2px;
            color: #fff;
            font-family: sans-serif;
            font-weight: 500;
            text-transform: uppercase;
            transition: 0.2s ease;
            cursor: pointer;
        }
        input[type="submit"]:hover,input[type="submit"]:focus
        {
            background: #ff5722;
            transition: 0.2s ease;
        }
    </style>

    <body>
    <?php include('header.php');?>
        
    <div id="login-box">
        <div class="login">
            <input type="text" id="uname" name="uname" placeholder="name*" required>

            <input type="password" id="password" name="password" placeholder="password*" required>
            
            <input type="checkbox" name="rememberme" value="rememberme">
            <span class="checkamrk"><label class="rememberme">Remember me</span>
        <br><br>
            <input class="button "type="submit" value="Submit" name="submit">
            <a href="forgetpass.php" class="link">Forget Password?</a>
        </div>
    </div>
    <?php include('footer.php');?>
    </body>
</html>