<!DOCTYPE html>
<html>
    <style>
        legend
        {
            padding: 10px 10px;
        }
    </style>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <fieldset>
            <legend style="font-family: calibri;">EMAIL</legend>
                <input type="text" id="email" name="email"><b> i</b><br>
                <hr>
                <input type="submit" value="Submit">
            </fieldset>
        </form>
        <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
          $email = $_POST['email'];
          if (empty($email)) 
          {
            echo "Email is empty";
          } else {
            echo "Your Email is: $name ";
          }
        }
        ?>
    </body>
</html>