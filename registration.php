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
                <input type="text" id="uname" name="uname" ><br>
                <label for="password">Password:</label>
                <input type="text" id="password" name="password" ><br>
                </div>
                <hr>
                <input type="checkbox" name="check" value="Remember Me">
                <span class="checkmark"></span>
                <label class="addition_check">Remember Me
                </label>
                <br><br>
                <input type="submit" value="Submit" name="submit">
                <input type="submit" value="resetForm" name="reset">
                <a href="">forget password?</a>
            
        </fieldset>
        </form>
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
          $error = [];
          if(isset($_POST['reset'])) {
            $error = [];
          }
          if(isset($_POST['submit']))
            {
              $uname = $_POST['uname'];
              $password = $_POST['password'];

              

              if(strlen($uname) < 2) {
                array_push($error,'username should be atleast 2 charecter');
                
              }

              if(!preg_match('/[^a-z_\-0-9]/i', $uname)) {
                 array_push($error,'please provide valid username');
              }

              if(strlen($password) < 8 ) {
                array_push($error,'Password must be atleast 8 charecter');
              }

              if ( !preg_match("/[\'^£$%&*()}{@#~?><>,|=_+!-]/", $password) ) {
                array_push($error,'Password must contain atleast one special charecter');
              }
              else {
                echo "form is submitted";
              }

              if(isset($_POST['submit']) && count($error)> 0) {
                echo 'Errors are :' ;
                foreach($error as $e) {
                  echo '<ul><li>'. $e .'</li></ul>';
                }
              }

            }
        }
        ?>
    </body>
</html>