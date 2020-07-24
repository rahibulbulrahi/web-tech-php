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
        .login label
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
    <?php include('header.php');?>
    <form id="login" >
            <fieldset style="border: black 2px solid;">
                <legend><b>LOG IN</b></legend>

                <div class="login">
                    <label for="email"><b>Email</b></label>
                    : <input type="text" id="email" name="email" size="55px" placeholder="email*" required><br>

                </div><br>
                <input class="button "type="submit" value="Submit" name="submit">
                
            </fieldset>
        </form>
    <?php include('footer.php');?>
    </body>
</html>