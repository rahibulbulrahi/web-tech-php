<!DOCTYPE html>
<html>
    <style>
        body
        {
            margin: 0;
            padding: 0;
            background: white;
        }
        div.slideshow
        {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        div.navigation
        {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
        }
        .bar
        {
            width: 50px;
            height: 10px;
            border: 2px solid grey;
            border-radius: 5px;
            margin: 6px;
            cursor: pointer;
        }
        .bar:hover
        {
            border: 2px solid #3f93cc;
        }
        input[name="r"]
        {
            position: absolute;
            visibility: hidden;
        }
        div.slides
        {
            width: 100%;
            height: 100%;
        }
        div.slide
        {
            width: 100%;
            transition: 0.6s;
        }
        .slide img
        {
            width: 100%;
            height: 100%;
        }
    </style>

    <body>
    <?php include('header.php');?>
    
    <div class="slideshow">
        
        <div class="slides">
            <input type="radio" name="r" id="r1" checked>
            <input type="radio" name="r" id="r2" >
            <input type="radio" name="r" id="r3" >
        
    
            <div class="slide">
                <img src="images/1.png" alt="">
            </div>
            
            <div class="slide">
                <img src="images/2.png" alt="">
            </div>

            <div class="slide">
                <img src="images/3.png" alt="">
            </div>

            <div class="navigation">
            <label for="r1" class="bar"></label>
            <label for="r2" class="bar"></label>
            <label for="r3" class="bar"></label>
            </div>
        </div>
    </div>

   
    
    <?php include('footer.php');?>
    </body>
</html>