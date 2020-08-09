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
        div.planning
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
    
    <div class="planning">
        <h1>Tour Planning</h1>
        <hr class="line">
    </div>
        
    

   
    
    <?php include('footer.php');?>
    </body>
</html>