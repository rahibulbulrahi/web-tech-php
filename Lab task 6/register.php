<!DOCTYPE html>
<html>
<head><title>Registration</title></head>
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
        div.left-box
        {
            position: absolute;
            top: 0;
            left: 0;
            box-sizing: border-box;
            padding: 40px;
            width: 300px;
            height: 400px;
        }
        h1
        {
            margin: 0 0 20px 0;
            font-weight: 300;
            font-size: 28px;
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
        div.right-box
        {
            position: absolute;
            top: 0;
            right: 0;
            box-sizing: border-box;
            padding: 40px;
            width: 300px;
            height: 400px;
            background-image: url(2.jpg);
            background-size: cover;
            background-position: center;
        }
    </style>

    <body>
    <?php include('header.php');?>

        <div id="login-box">
        <form action="" action="POST">
            <div class="left-box">
                <h1>Sign Up</h1>

                <input type="text" name="username" placeholder="Username*" value="" autocomplete="off" required/>
                <input type="text" name="email" placeholder="Email*" value="" autocomplete="off" required/>
                <input type="password" name="password" placeholder="Password*" value="" autocomplete="off" required/>
                <input type="password" name="re_password" placeholder="Retype Password*" value="" autocomplete="off" required/>

                <input type="submit" name="submit" value="Sign Up"/>
            </div>
            <div class="right-box">
               
            </div>
            </form>
        </div>
    </body>

    <?php
    $server = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $db = "lab_task6";

    $con = mysqli_connect($server,$dbuser,$dbpassword,$db);

    if(isset($_POST['submit']))
        {
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $re_password = mysqli_real_escape_string($con, $_POST['re_password']);
            
            $emailquery = "select * from user where email = $email";
            $query = mysqli_query($con, $emailquery);

            $emailcount = mysqli_num_rows($query);

            if($emailcount>0)
            {
                echo "email already exist";
            }
            else
            {
                if($password == $re_password)
                {
                   $insertquery = "INSERT into user (username, email, password, re_password) VALUES('$username','$email','$password','$re_password') ";
                    
                   $iquery = mysqli_query($con,$insertquery);
                }
                else
                {
                    echo "password are not matching";
                }
            }

        }
    ?>
</html>