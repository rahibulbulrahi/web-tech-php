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
            height: 82%;
            background: #b3b3b3;
            border: 2px solid black;
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
        .sidebar a::before
        {
            content: '';
            display: block;
            height: 5px;
            background-color: #444;
            position: relative;
            width: 0%;
            transition: all ease-in-out 200ms;
        }
        .sidebar a:hover::before
        {
            width: 100%;
        }
    </style>

    <body>
    <?php include('header.php');?>
        
        <div class="sidebar">
            <ul>
                <li><a href=dashboard.php>Dashboard<a></li>
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