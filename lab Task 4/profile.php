<!DOCTYPE html>
<html>
    <style>
    body
        {
            background: lightgray;
        }
        form
        {
            width: 50%;
            margin: auto;
            padding: 50px;
        }
        div.sidebar
        {
            position: fixed;
            width: 250px;
            height: 100%;
            background: #b3b3b3;
        }
        .sidebar ul li
        {
            font-size: 15px;
            color: black;
            list-style: none;
            padding: 15px 15px;
            border-bottom: 2px solid grey;
        }
    </style>

    <body>
    <?php include('header.php');?>
        
        <div class="sidebar">
            <ul>
                <li>Dashboard</li>
                <li>View Profie</li>
                <li>Edit Profile</li>
                <li>Change Profile Picture</li>
                <li>Change Profile Password</li>
                <li>Log Out</li>
            </ul>
        </div>
    
    <?php include('footer.php');?>
    </body>
</html>