<!DOCTYPE html>
<html>
    <body>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
            <fieldset>
                <legend>BLOOD GROUP</legend>
                <select name="blood">
                    <option value=""></option>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="O+">O+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
                    <option value="O-">O-</option>
                    <option value="AB-">AB-</option>
                </select><br>
                <hr>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $option = $_POST["blood"];
                
                echo "Your Blood Group is: $option";
                
            }
        ?>
    </body>
</html>