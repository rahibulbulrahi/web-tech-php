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
        form
        {
            width: 50%;
            margin: auto;
        }
        .changepass label
        {
            width: 200px;
            display: inline-block;
            text-align: left;
            margin: 3px;
        }
        input[type="password"]
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
        <div class="changepass">
        <form id="changepass" >
            <fieldset style="border: black 2px solid;">
                <legend><b>CHANGE PASSWORD</b></legend>

                <div class="changepass">
                    <label for="cpass">Current Password:</label>
                    : <input type="password" id="cpass" name="cpass" size="30px" required><br>
                    
                    <label for="newpass" style="color:green">New Password</label>
                    : <input type="password" id="newpass" name="newpass" size="30px" required><br>

                    
                    <label for="repass" style="color:red">Repeat New Password</label>
                    : <input type="password" id="repass" name="repass" size="30px" required><br>
                    </div>
                    <hr>
                    <input class="button "type="submit" value="Submit" name="submit">
                    
            </fieldset>
            
        </form>
        
    
    <?php include('footer.php');?>
    </body>
</html>