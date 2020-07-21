<!DOCTYPE html>
<html>
    <style>
        .a label
        {
            width: 80px;
            display: inline-block;
            text-align: right;
        }
    </style>
    <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <fieldset>
            <legend style="font-family: calibri;">LOG IN</legend>
            <div class="a">
                <label for="uname">User name:</label>
                <input type="text" id="uname" name="uname" required><br>
                <label for="password">Password:</label>
                <input type="text" id="password" name="password" required><br>
                </div>
                <hr>
                <input type="checkbox" name="check" value="Remember Me">
                <span class="checkmark"></span>
                <label class="addition_check">Remember Me
                </label>
                <br><br>
                <input type="submit" value="Submit" name="submit">
                <a href="">forget password?</a>
            
        </fieldset>
        </form>
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
          if(isset($_POST['submit']))
            {
              $uname = $_POST['uname'];
              $password = $_POST['password'];
              if (empty($uname || $password)) 
              {
                echo "Username or Passowrd is empty";
                } else {
                echo "Your Usename is $uname and password is $password";
              }
            }
        }
        ?>
    </body>
</html>