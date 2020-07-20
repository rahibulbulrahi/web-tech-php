<!DOCTYPE html>
<html>
    <style>
        .a label
        {
            width: 150px;
            display: inline-block;
            text-align: left;
            margin: 3px;
        }
    </style>
    <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <fieldset>
            <legend style="font-family: calibri;">CHANGE PASSWORD</legend>
            <div class="a">
                <label for="cpass">Current Password:</label>
                : <input type="password" id="cpass" name="cpass" size="30px" required><br>
                
                <label for="newpass" style="color:green">New Password</label>
                : <input type="password" id="newpass" name="newpass" size="30px" required><br>

                
                <label for="repass" style="color:red">Repeat New Password</label>
                : <input type="password" id="repass" name="repass" size="30px" required><br>
                </div>
                
                <hr>
                <input type="submit" value="Submit" name="submit" style="width: 100px; padding:5px">
        </fieldset>
        </form>
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
          if(isset($_POST['submit']))
            {
                $cpass = $_POST['cpass'];
                $newpass = $_POST['newpass'];
                $repass  = $_POST['repass'];
                if($newpass == $cpass)
                {
                    echo "Please use new password!";
                }
                if($repass != $newpass)
                {
                    echo "New password doesn't match!";
                }
                else
                {
                    echo "Your Password has been change!";
                }
            }
        }
        ?>
    </body>
</html>