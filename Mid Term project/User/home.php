<!DOCTYPE html>
<html>
    <head><title>Home Page</title></head>
    <style>
        body
        {
            margin: 0;
            padding: 0;
            background: #fff;
        }
        input[type="search"]
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
            border-radius: 5px;
            padding: 5px;cursor: pointer;
        }
        .button:hover 
        {
            border: 2px solid black ;
        }
        div.find
        {
            background: #b3ffe6;
            width: 90%;
            height: 300px;
            margin: 5% auto;
            border-radius: 12px;
        }
        div.search
        {
            font-family: 'cooper';
            width: 60%;
            margin: auto;
            padding: 60px 10%;
        }
        div.about
        {
            font-family: 'Consolas';
            text-align: center;
        }
        hr.line 
        {
            border: 3px solid Black;
            border-radius: 5px;
            width: 90%;
            margin: auto;
        }
        div.about_us
        {
            width: 80%;
            margin: auto;
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: 500px 500px;
            text-align: justify;
            grid-gap: 50px;
        }
        div.tour
        {
             font-family: 'Consolas';
            text-align: center;
        }
        div.domestic
        {
            width: 300px;
            height: 150px;
            background-color: #ff4757;
            border-radius: 10px;
            text-align: center;
        }
        div.international
        {
            width: 300px;
            height: 150px;
            background-color: #ff4757;
            border-radius: 10px;
            text-align: center;
        }
        div.package_tour
        {
            width: 300px;
            height: 150px;
            background-color: #ff4757;
            border-radius: 10px;
            text-align: center;
        }
        div.trip
        {
            width: 80%;
            margin: auto;
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: 350px 350px 350px;
            text-align: justify;
            grid-gap: 50px;
        }
        a
        {
            color: black;
            padding: 0 5%;
        }
    </style>

    <body>
    <?php include('header.php');?>
    
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
            <h3>For Domestic tour visit <a href="">Here</a></h3>
        </div>

        <div class="international">
            <h3>For International tour visit <a href="">Here</a></h3>
        </div>
        
        <div class="package_tour">
            <h3>For Package tour Program visit <a href="">Here</a></h3>
        </div>
    </div>
    
    <?php include('footer.php');?>
    </body>
</html>