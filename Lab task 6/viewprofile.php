<!DOCTYPE html>
<html>
    <head><title>Dashboard</title></head>
    <style>
    
    </style>

    <?php
        mysqli_connect('localhost','root','');
        mysqli_select_db('lab_task6');
    ?>

    <body>
        <?php include('dashheader.php');?>
        <?php include('sidebar.php');?>

    </body>
</html>