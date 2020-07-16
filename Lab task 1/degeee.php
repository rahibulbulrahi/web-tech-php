<!DOCTYPE html>
<html>
    <style>

    </style>
    <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <fieldset>
                <legend>DEGREE</legend>
                <input type="checkbox" name="check[]" value="SSC">
                <span class="checkmark"></span>
                <label class="addition_check">SSC
                </label>
                <input type="checkbox"name="check[]" value="HSC">
                <span class="checkmark"></span>
                <label class="addition_check">HSC
                </label>
                <input type="checkbox"name="check[]" value="BSc">
                <span class="checkmark"></span>
                <label class="addition_check">BSc
                </label>
                <input type="checkbox"name="check[]" value="MSc">
                <span class="checkmark"></span>
                <label class="addition_check">MSc
                </label>
                <hr>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
        <br>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                
                if(isset($_POST['submit']))
                {
                    if(!empty($_POST["check"]))
                    {
                        echo "You have complete";
                        foreach($_POST["check"] as $check)
                        {
                            echo " $check Degree";
                        }
                    }
                    else
                    {
                        echo 'First select one degree';
                    }
                }
            }
        ?>
    </body>
</html>