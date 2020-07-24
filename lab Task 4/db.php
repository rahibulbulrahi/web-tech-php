<?php
    $server ="localhost";
    $user = "root";
    $password = "";
    $db = "labtask4";

    $con = mysqli_connect($server,$user,$password,$db);

    if($con)
    {
        ?>
        <script>
            alert("Connection Successful");
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert("Connection Faild");
        </script>
        <?php
    }
?>