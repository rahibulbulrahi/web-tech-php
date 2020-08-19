<?php

    $server = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $db = "lab_task6";

    $con = mysqli_connect($server,$dbuser,$dbpassword,$db);

    if($con)
    {
        ?>
        <script>alart("registration complete, please sign in.");</script>
        <?php
    }
    else
    {
        ?>
        <script>alert("Registration failed, Please do again");</script>
        <?php

    }


    if(isset($_POST['submit']))
    {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $re_password = mysqli_real_escape_string($con, $_POST['re_password']);
        
    }

?>