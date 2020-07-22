<!DOCTYPE html>
<html>
    <style>
        body
        {
            background: lightgray;
            width: 100%;
            text-align: justify;
        }
        hr.line
        {
            border: 5px solid Grey;border-radius: 5px;width: 90%;
        }
        div.about
        {
            font-family: Calibri;
            width: 85%;
            text-align: justify;
            
        }
        div.information
        {
            font-family: Calibri;
            width: 500px;
            text-align: justify;
        }
    </style>
    <body>
    <?php include('header.php');?>
        <h1 style="font-size: 40px;text-align: center;">
                <pre>W E L C O M E  T O  E A S Y  T O U R  &  T R A V E L S</pre>
        </h1>
        <hr class="line">
        <div class="about">
        <p style="font-size: 20px; translate: 7%;">
        Easy Tour & Travels is an online travel company that operates a website with user-generated content, 
        a comparison shopping website, and offers online hotel reservations as well as bookings for transportation, 
        lodging, travel experiences, and restaurants.</p>
        </div>
        <div class="information">
            <h4 style="translate: 7%">For More information Please <a href="registration.php">Registration</a>, 
            If already done then visit <a href="login.php">Login</a>.</h4>
        </div>
    <?php include('footer.php');?>
    </body>
</html>