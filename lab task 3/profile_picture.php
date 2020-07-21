<!DOCTYPE html>
<html>
    <style>

    </style>
    <body>
        <fieldset>
        <legend style="font-family: calibri;">PROFILE PICTURE</legend>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="file" name="file" id="file">
            <hr>
            <input type="submit" value="Upload Image" name="submit">
            </form>
        
        </fieldset>
        <?php
            if(isset($_POST['submit']))
            {
                $file = $_FILES['file'];
                
                $fileName = $_FILES['file']['name'];
                $fileTmpName = $_FILES['file']['tmp_name'];
                $fileSize = $_FILES['file']['size'];
                $fileError = $_FILES['file']['error'];
                $fileType = $_FILES['file']['type'];

                $fileEXT = explode('.', $fileName);
                $fileActualExt = strtolower(end($fileEXT));

                $allowed = array('jpeg','jpeg','png');
            }
        ?>
    </body>
</html>