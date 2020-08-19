<?php
    session_start();

    $con = mysqli_connect('localhost', 'root');

    if($con)
    {
        echo "Connection Successful";
    }
    else
    {
        echo "no connection";
    }

    $db = mysqli_select_db($con, 'lab_task6');

    if(isset($_POST['submit']))
    {
        $username = $_POST['uname'];
        $password = $_POST['password'];

        $sql = "select * from login where username = '$username' and password = '$password'";

        $query = mysqli_query($con,$sql);
        
        $row = mysqli_num_rows($query);
        if($row == 1)
        {
            echo "Login Complete";
            $_SESSION['user'] = $uname;
            header('location:dashboard.php');
        }
        else
        {
            echo "login Failed";
            header('location:login.php');
        }
        
    }

?>