<!DOCTYPE html>
<html>
    <style>
        form
        {
            width: 50%;
            margin: auto;
            padding: 10px 10%;
        }
        .info label
        {
            width: 120px;
            display: inline-block;
            text-align: left;
            margin: 3px;
            padding: 10px;
        }
        input[type="text"]
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
    </style>

    <body>
        <form action="controller/createpackage.php" method="POST">
            <fieldset>
                <legend>ADD PACKAGE</legend>

                    <div class = "info">
                    
                    <label for="location">Location</label>
                    : <input type="text" id="location" name="location" size="50px"><br>
                        
                    <label for="information">Information</label>
                    : <input type="text" id="information" name="information" size="50px"><br>
                        
                    <label for="duration">Duration</label>
                    : <input type="text" id="duration" name="duration" size="50px"><br>
                    
                    <label for="price">Price</label>
                    : <input type="text" id="price" name="price" size="50px"><br>
                        
                    <input type="file" name="image"><br><br>
                        
                    <input type="submit" name = "createStudent" value="Create">
                    <input type="reset"> 
                    </div>
            </fieldset>
        </form>
    </body>
</html>