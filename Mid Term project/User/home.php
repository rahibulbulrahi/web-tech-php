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
            margin: auto;
            border-radius: 12px;
        }
        div.search
        {
            font-family: 'cooper';
            width: 50%;
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
            width: 90%;
            margin: auto;
            display: grid;
            grid-template-rows: 500px;
            grid-template-columns: 500px 500px;
            text-align: justify;
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

        
    

   
    
    <?php include('footer.php');?>
    </body>
</html>