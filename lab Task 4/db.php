<?php
    
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST,'email');
    $uname = filter_input(INPUT_POST,'uname');
    $password = filter_input(INPUT_POST,'password');
    $cpassword = filter_input(INPUT_POST,'cpassword');
    $gender = filter_input(INPUT_POST,'gender');
    $date = filter_input(INPUT_POST,'date');
    $month = filter_input(INPUT_POST,'month');
    $year = filter_input(INPUT_POST,'year');
            
    $server ="localhost";
    $user = "root";
    $password = "";
    $db = "labtask4";

    $conn = new mysqli($server,$user,$password,$db);

    if(mysqli_connect_error())
    {
        echo "Connection Error...";
    }
    else
    {
        $sql = "INSERT INTO registration(name,email,username,password,cpassword,gender,dob) VALUES()"
    }

?>