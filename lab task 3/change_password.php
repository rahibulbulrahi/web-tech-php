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
            <legend style="font-family: calibri;">CHANGE PASSWORD</legend>
            <div class="a">
                <label for="cpass">Current Password:</label>
                <input type="password" id="cpass" name="cpass" required><br>
                
                <label for="newpass">New Password:</label>
                <input type="password" id="newpass" name="newpass" required><br>

                
                <label for="repass">Repeat Password:</label>
                <input type="password" id="repass" name="repass" required><br>

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