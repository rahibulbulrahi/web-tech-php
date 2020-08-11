<!DOCTYPE html>
<html>
    <head><title>Package</title></head>
    <style>
        body
        {
            margin: 0;
            padding: 0;
            background: #efefef;
        }
        hr.line 
        {
            border: 3px solid Black;
            border-radius: 5px;
            width: 90%;
            margin: auto;
        }
        div.trip
        {
            text-align: center;
        }
        div.trip_content
        {
            width: 80%;
            margin: auto;
            display: grid;
            grid-template-rows: auto;
            grid-template-columns: 350px 350px 350px;
            text-align: justify;
            grid-gap: 50px;
        }
        div.inter_trip
        {
            width: 300px;
            height: 150px;
            background-color: #ff4757;
            border-radius: 10px;
            text-align: center;
        }
        a
        {
            color: black;
            padding: 0 5%;
        }
      
    </style>

    <body>
    <?php include('header.php');?>
    
    <div class="trip">
        <h1>International</h1><br>
        <hr class="line"><br>
    </div>
    
    <div class="trip_content">
        <div class="inter_trip">
            <h3>For visit Dubai<a href="">Learn More</a></h3>
        </div>

        <div class="inter_trip">
            <h3>For visit Singapore <a href="">Learn More</a></h3>
        </div>

        <div class="inter_trip">
            <h3>For visit Malaysia <a href="">Learn More</a></h3>
        </div>

        <div class="inter_trip">
            <h3>For Visit Thailand<a href="">Learn More</a></h3>
        </div>

        <div class="inter_trip">
            <h3>For Visit London<a href="">Learn More</a></h3>
        </div>

        <div class="inter_trip">
            <h3>For Visit India <a href="">Learn More</a></h3>
        </div> 
        
    </div>

    <div class="trip">
        <h1>Domestic</h1><br>
        <hr class="line"><br>
    </div>
    
    <div class="trip_content">
        <div class="inter_trip">
            <h3>For visit Dubai<a href="">Learn More</a></h3>
        </div>

        <div class="inter_trip">
            <h3>For visit Singapore <a href="">Learn More</a></h3>
        </div>

        <div class="inter_trip">
            <h3>For visit Malaysia <a href="">Learn More</a></h3>
        </div>

        <div class="inter_trip">
            <h3>For Visit Thailand<a href="">Learn More</a></h3>
        </div>

        <div class="inter_trip">
            <h3>For Visit London<a href="">Learn More</a></h3>
        </div>

        <div class="inter_trip">
            <h3>For Visit India <a href="">Learn More</a></h3>
        </div> 
        
    </div>
    
   
    
    <?php include('footer.php');?>
    </body>
</html>