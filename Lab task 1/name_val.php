<!DOCTYPE html>
<html>
    <body>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
            <fieldset>
                <legend>NAME</legend>
                <input type="text" id="name" name="name" size="30" ><br>
                <hr>
                <input type="submit" name="submit" value="Submit">
            </fieldset>
        </form>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
          $name = $_POST['name'];
          if (empty($name)) 
          {
            echo "Name is empty";
          } else {
            echo "Your Name is: $name ";
          }
        }
        ?>
    </body>
</html>