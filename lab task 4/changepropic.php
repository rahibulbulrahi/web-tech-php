<!DOCTYPE html>
<html>
    <style>
    body
        {
            background: lightgray;
        }
        div.sidebar
        {
            position: fixed;
            width: 250px;
            height: 81%;
            background: #b3b3b3;
            border: 5px solid black;
        }
        .sidebar ul li
        {
            font-size: 15px;
            color: black;
            list-style: none;
            padding: 15px 0px;
            
        }
        .sidebar a
        {
            color: #444;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 15px;
        }
        .sidebar a:hover
        {
            color: #000;
        }
        hr.line
        {
            border: 2px solid Grey; border-radius: 2px; width: 200px;
        }
        div.propicchange
        {
            width: 50%;
            margin: auto;
        }
        .propicchange label
        {
            width: 120px;
            display: inline-block;
            text-align: left;
            margin: 3px;
        }
        input[type="text"]
        {
            overflow: hidden;
            font-size: 15px;
            padding: 5px 0;
            border: none;
            outline: none;
            background: none;
            color:black;
            border-bottom: 1px solid black;
        }
        input[type="submit"]
        {
            width: 100px ;
            background: none;
            border: 2px solid grey;
            padding: 5px;cursor: pointer;
        }
        .button:hover 
        {
            border: 2px solid black ;
        }
 </style>

    <body>
    <?php include('loginhead.php');?>
        
        <div class="sidebar">
            <ul>
                <li style="font-size: 20px;"><b>--- ACCOOUNT ---</b></li>
                <hr class="line">
                <li><a href=dashboard.php>Dashboard<a></li>
                <li><a href=profile.php>View Profie</li>
                <li><a href=editprofile.php>Edit Profile</li>
                <li><a href=changepropic.php>Change Profile Picture</li>
                <li><a href=changepropass.php>Change Profile Password</li>
                <li><a href=home.php>Log Out</a></li>
            </ul>
        </div>
        
        <div class="propicchange">
        <fieldset style="border: black 2px solid;">
            <legend style="font-family: calibri;"><b>CHANGE PROFILE PICTURE</b></legend>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
            
            <input type="file" name="file">
            <hr>
            <input type="submit" name="submit" value="Upload">
            </form>
        
        </fieldset>
        </div>

    
    <?php include('footer.php');?>
    </body>
</html>