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
        .changepass label
        {
            width: 200px;
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
        a
        {
            text-decoration: none;
            color: black;
            padding: 0 5%;
        }
        .link:hover
        {
            color: red;
        }
    </style>

    <body>
    <?php include('header.php');?>
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
                </div><br>
                <input class="button "type="submit" value="Submit" name="submit">
                
            </fieldset>
        </form>
    <?php include('footer.php');?>
    </body>
</html>