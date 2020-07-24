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
        div.login
        {
            font-weight: Bold;
        }
        .login label
        {
            width: 120px;
            display: inline-block;
            text-align: left;
            margin: 3px;
        }
    </style>

    <body>
    <?php include('header.php');?>
    <form id="login" >
            <fieldset style="border: black 2px solid;">
                <legend><b>LOG IN</b></legend>

                <div class="login">
                    <label for="uname">User Name</label>
                    <input type="text" id="uname" name="uname" size="55px" placeholder="name*" required>

                </div>
            </fieldset>
        </form>
    <?php include('footer.php');?>
    </body>
</html>