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
        
    </style>

    <body>
    <?php include('header.php');?>
    
    <div class="find">
    <form>
        <div class="search">
            <h1><b>FIND THE GOOD TRIP HERE</b></h1>
            <input type="search" id="search" name="search" size="60px" placeholder="Where to go?*" required><br>
        </div>
    </form>
    </div>
    
        
    

   
    
    <?php include('footer.php');?>
    </body>
</html>