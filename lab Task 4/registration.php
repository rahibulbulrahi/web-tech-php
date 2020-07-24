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

    </style>
    <body>
    <?php include('header.php');?>
        <form id="registration" method="POST" action="">
            <fieldset>
                <legend>REGISTRATION</legend>
                <div class="registration">

                <label for="name">Name</label>
                : <input type="text" id="name" name="name" required><br>

                <label for="email">Email</label>
                : <input type="text" id="email" name="email" required><br>

                <label for="uname">User name:</label>
                : <input type="text" id="uname" name="uname" required><br>s

                <label for="password">Password:</label>
                : <input type="text" id="password" name="password" required><br>

                <label for="cpassword">User name:</label>
                <input type="text" id="cpassword" name="cpassword" required><br>
                </div>
            </fieldset>
        </form>
    <?php include('footer.php');?>
    </body>
</html>