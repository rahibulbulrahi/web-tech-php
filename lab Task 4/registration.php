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
        }
        .registration label
        {
            width: 150px;
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
    </style>
    <body>
    <?php include('header.php');?>
        <form id="registration" method="POST" action="">
            <fieldset>
                <legend>REGISTRATION</legend>
                <div class="registration">

                <label for="name">Name</label>
                : <input type="text" id="name" name="name" size="50px" placeholder="name*" required><br>

                <label for="email">Email</label>
                : <input type="text" id="email" name="email" size="50px" placeholder="email*" required><br>

                <label for="uname">User name:</label>
                : <input type="text" id="uname" name="uname" size="50px" placeholder="user name*" required><br>

                <label for="password">Password:</label>
                : <input type="text" id="password" name="password" size="50px" placeholder="password*" required><br>

                <label for="cpassword">User name:</label>
                : <input type="text" id="cpassword" name="cpassword" size="50px" placeholder="confirm password*" required><br>
                </div>
            </fieldset>
        </form>
    <?php include('footer.php');?>
    </body>
</html>