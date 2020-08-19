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
    }

?>