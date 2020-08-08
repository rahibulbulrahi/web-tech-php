<!DOCTYPE html>
<html>
    <style>
        body
        {
            margin: 0;
            padding: 0;
            background: white;
        }
        .slideshow
        {
            width: 700px;
            height: 400px;
            overflow: hidden;
        }
    </style>

    <body>
    <?php include('header.php');?>
        
    <div class="slides">
        <input type="radio" name="r" id="r1" checked>
        <input type="radio" name="r" id="r2" >
        <input type="radio" name="r" id="r3" >
    </div>
    <div class="slideshow">
        <div class="slide-1">
            <img src="images/1.png" alt="">
        </div>
        
        <div class="slide-2">
            <img src="images/2.png" alt="">
        </div>

        <div class="slide-3">
            <img src="images/3.png" alt="">
        </div>
    </div>

    <div class="navigation">
        <label for="r1" class="bar"></label>
        <label for="r2" class="bar"></label>
        <label for="r3" class="bar"></label>
    </div>
    
    <?php include('footer.php');?>
    </body>
</html>