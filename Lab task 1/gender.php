<!DOCTYPE html>
<html>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <fieldset>
                <legend>GENDER</legend>
                
                <input type="radio" name="gender" value="Male">
                <span class="radiobtn"></span>
                <label class="male">Male</label>

                <input type="radio" name="gender" value="Female">
                <span class="radiobtn"></span>
                <label class="female">Female</label>

                <input type="radio" name="gender" value="Other">
                <span class="radiobtn"></span>
                <label class="other">Other</label>

                <hr>
                <input type="submit" value="Submit" name="submit">

            </fieldset>
        </form>
        <br>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $gender = $_POST['gender'];
            
            if(isset($_POST['submit']))
            {
                echo "You are $gender";
            }
        }
        ?>
    </body>
</html>