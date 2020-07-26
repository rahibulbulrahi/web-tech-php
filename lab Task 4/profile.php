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
            padding: 15px 15px;
            
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
    </style>

    <body>
    <?php include('header.php');?>
        
        <div class="sidebar">
            <ul>
                <li><a href=profile.php>Dashboard<a></li>
                <li><a href=viewprofile.php>View Profie</li>
                <li><a href=editprofile.php>Edit Profile</li>
                <li><a href=changepropic.php>Change Profile Picture</li>
                <li><a href=changepropass.php>Change Profile Password</li>
                <li><a href=home.php>Log Out</li>
            </ul>
        </div>

    
    <?php include('footer.php');?>
    </body>
</html>