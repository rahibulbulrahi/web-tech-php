<!DOCTYPE html>
<html>
    <style>
        form
        {
            width: 50%;
            margin: auto;
        }
        .info label
        {
            width: 120px;
            display: inline-block;
            text-align: left;
            margin: 3px;
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
                    <label for="location">Location:</label>
                    <input type="text" id="location" name="location"><br>
                        
                    <label for="information">Information:</label>
                    <input type="text" id="information" name="information"><br>
                        
                    <label for="duration">Duration:</label>
                    <input type="text" id="duration" name="duration"><br>
                    
                    <label for="price">Price:</label>
                    <input type="password" id="price" name="price"><br>
                        
                    <input type="file" name="image"><br><br>
                        
                    <input type="submit" name = "createStudent" value="Create">
                    <input type="reset"> 
                    </div>
            </fieldset>
        </form>
    </body>
</html>