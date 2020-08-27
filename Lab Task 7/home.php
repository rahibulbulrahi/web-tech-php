<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="style/homestyle.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet"> 
        <title>Home Page</title>
    </head>

    <body>
        <?php include('header.php')?> 
        <div class="find">
    <form>
        <div class="search">
            <h1><b>FIND THE GOOD TRIP HERE</b></h1>
            <input type="search" id="search" name="search" size="60px" placeholder="Where to go?*" required>
            <input class="button" type="submit" value="Search" name="search">
        </div>
    </form>
    </div>
    
    <div class="about">
        <h1>About US</h1>
        <hr class="line"><br>
    </div>
    
    <div class="about_us">
        <div class="destination">
            
        <h3>Best Destination</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco l
                aboris nisi ut aliquip ex ea commodo consequat.<p>
        
        </div>
        
        <div class="trust">
      
        <h3>Trust & Safety</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco l
                aboris nisi ut aliquip ex ea commodo consequat.<p>
        </div>
    </div>
    
    <div class="tour">
        <h1>Top Tour</h1>
        <hr class="line"><br>
    </div>
        
    <div class="trip">
        <div class="domestic">
            <h3>For Domestic tour visit <a href="package.php">Here</a></h3>
        </div>

        <div class="international">
            <h3>For International tour visit <a href="package.php">Here</a></h3>
        </div>
        
        <div class="package_tour">
            <h3>For Package tour Program visit <a href="package.php">Here</a></h3>
        </div>
    </div>
    </body>
</html>