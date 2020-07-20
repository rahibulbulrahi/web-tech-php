<!DOCTYPE html>
<html>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <fieldset>
                <legend>GENDER</legend>
                
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other 
                <hr>
                <input type="submit" value="Submit" name="submit">

            </fieldset>
        </form>
        <br>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
              } else {
                $gender = ($_POST["gender"]);
              }
        }
        ?>
    </body>
</html>