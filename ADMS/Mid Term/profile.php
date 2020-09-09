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
            border: 2px solid Grey; border-radius: 2px; width: 100px;
        }
        div.welcome
        {
            width: 50%;
            margin: auto;
        }
 </style>

    <body>
    <?php include('loginhead.php');?>
        
        <div class="sidebar">
            <ul>
                <li style="font-size: 20px;"><b>--- PROFILE ---</b></li>
                <hr class="line">
                <li><a href=dashboard.php>Dashboard<a></li>
                <li><a href=profile.php>Edit Profie</li>
                <li><a href=browse.php>Browse Restuarent</li>
                <li><a href=oderfood.php>Order Food</li>
                <li><a href=foodhistory.php>Food Order History</li>
                <li><a href=home.php>Log Out</a></li>
            </ul>
        </div>
    </body>
</html>