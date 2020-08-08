<!DOCTYPE html>
<html>
    <style>
        body
        {
            margin: 0px;
            font-family: Calibri;
            font-weight: 400;
            background: lightgray;
        } 
        form
        {
            width: 50%;
            margin: auto;
            padding: 20px 10%;
        }
        div.registration
        {
            font-weight: Bold;
        }
        .registration label
        {
            width: 120px;
            display: inline-block;
            text-align: left;
            margin: 3px;
        }
        input[type="text"]
        {
            width: 100%;
            overflow: hidden;
            font-size: 15px;
            padding: 10px 0;
            border: none;
            outline: none;
            background: none;
            color:black;
            border-bottom: 1px solid black;
        }
        input[type="password"]
        {
            width: 100%;
            overflow: hidden;
            font-size: 15px;
            padding: 10px 0;
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
        input[type="reset"]
        {
            width: 100px ;
            background: none;
            border: 2px solid grey;
            padding: 5px;cursor: pointer;
        }
        .address textarea
        {
            background: transparent;
            width: 100%;
            overflow: hidden;
            font-size: 15px;
            padding: 10px 0;
            border: none;
            outline: none;
            background: none;
            color:black;
            border-bottom: 1px solid black;
        }
        .button:hover 
        {
            border: 2px solid black ;
        }
    </style>
    <body>
    <?php include('header.php');?>
        <form id="registration" method="POST" action="db.php">
            
        <fieldset style="border: black 2px solid;">
                <legend><b>REGISTRATION</b></legend>
                
                <div class="registration" method="POST" action="">

                <input type="text" id="name" name="name" size="60px" placeholder="Name*" required><br>
                
                <input type="text" id="email" name="email" size="55px" placeholder="Email*" required><br>
                
                <input type="text" id="uname" name="uname" size="55px" placeholder="User Name*" required><br>
                
                <input type="password" id="password" name="password" size="55px" placeholder="Password*" required><br>
                
                <input type="password" id="cpassword" name="cpassword" size="55px" placeholder="Confirm Password*" required><br>

                <div class="address">
                <textarea rows="4" cols="50" placeholder="Enter your Address here...*"></textarea>
                </div>
                <br>
                <div class="gender">
                
                <label class="gender"><b>GENDER</b></label>
                <input type="radio" name="gender" value="Male">
                <span class="radiobtn"></span>
                <label class="male"><b>Male</b></label>

                <input type="radio" name="gender" value="Female">
                <span class="radiobtn"></span>
                <label class="female">Female</label>

                <input type="radio" name="gender" value="Other">
                <span class="radiobtn"></span>
                <label class="other">Other</label>

                
             </div>
                    </div><br>
                <input class="button" type="submit" value="Submit" name="submit">
                <input class="button" type="reset" value="Reset Form" name="reset">
            </div>

            </fieldset>
        </form>
    
    </body>
</html>