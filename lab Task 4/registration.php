<!DOCTYPE html>
<html>
    <style>
        .body
        {
            width: 50%;
            margin: 50px auto;
        }
        div.a
        {
            width: 100%;
            display: inline-block;
            text-align: left;
        }
        .a label
        {
            width: 150px;
            display: inline-block;
            text-align: left;
        }
        div.date
        {
            text-align: center;
            float: left;
            margin: 2px;
        }
        div.month
        {
            text-align: center;
            float: left;
            margin: 2px;
        }
        div.year
        {
            text-align: center;
            float: left;
            margin: 2px;
            
        }
        .fieldset
        {
            max-width: 500px;
        }
        hr.line
        {
            border: 1px solid Grey; border-radius: 2px; width: 125%;
        }
    </style>
    <body>
    <?php include('header.php');?>
    <div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <fieldset>
            <legend style="font-family: calibri;">REGISTRATION</legend>
            <div class="a">
                <label for="name">Name</label>
                : <input type="text" id="name" name="name" required><br>
                <hr class="line">
                <label for="email">Email</label>
                : <input type="text" id="email" name="email" required><b> i</b>
                <hr class="line">
                <label for="uname">User name</label>
                : <input type="text" id="uname" name="uname" required><br>
                <hr class="line">
                <label for="password">Password</label>
                : <input type="password" id="password" name="password" required><br>
                <hr class="line">
                <label for="cpassword">Confirm Password</label>
                : <input type="password" id="cpassword" name="cpassword" required><br>
                
            </div>
            <hr>
            <fieldset>
                <legend style="font-family: calibri;">Gender</legend>
                    <div class="b">
                        <input type="radio" name="gender" value="Male">
                        <span class="radiobtn"></span>
                        <label class="male">Male</label>

                        <input type="radio" name="gender" value="Female">
                        <span class="radiobtn"></span>
                        <label class="female">Female</label>

                        <input type="radio" name="gender" value="Other">
                        <span class="radiobtn"></span>
                        <label class="other">Other</label>
                    </div>
            </fieldset>
            <hr>
            <fieldset>
                <legend style="font-family: calibri;">Date of Birth</legend>
                    
                    <div class ="date">
                        <input type="text" id="date" name="date" size="5"> /
                        
                    </div>

                    <div class="month">
                       
                        <input type="text" id="month" name="month" size="5"> /
                    </div>

                    <div class="year">
                        
                        <input type="text" id="year" name="year" size="6"><i> (dd/mm/yyyy)</i>
                    </div>

            </fieldset>                
                
                <hr>
                <input type="submit" value="Submit" name="submit" style="width: 100px; padding:5px">
                <input type="reset" value="Reset" name="reset" style="width: 100px; padding:5px">
        </fieldset>


        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
              if(isset($_POST['submit']))
                {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $uname = $_POST['uname'];
                    $password = $_POST['password'];
                    $cpassword = $_POST['cpassword'];
                    $gender = $_POST['gender'];
                    $date = $_POST['date'];
                    $month = $_POST['month'];
                    $year = $_POST['year'];
                    
                    if(empty($name))
                    {
                        echo "Name is empty ";
                    
                    }
                    if(empty($uname))
                    {
                        echo "User Name is empty ";
                    
                    }
                    if($password != $cpassword)
                    {
                        echo "Your password doesnot match ";
                    
                    }
                    if(empty($date))
                    {
                        echo "Date is EMPTY! ";
                    
                    }
                    if(empty($month))
                    {
                        echo "Month is EMPTY! ";
                    
                    }
                    if(empty($year))
                    {
                        echo "Year is EMPTY! ";
                    
                    }
                    else 
                    {
                        echo "Name: $name, User Name : $uname, You are : $gender, Your DOB is: $date/$month/$year";
                    }
                }
            }
        ?>
        <?php include('footer.php');?>
    </body>
</html>