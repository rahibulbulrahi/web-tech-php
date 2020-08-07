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
        <form method="post" action="controller/findpackage.php">
            <fieldset>
                <legend>SEARCH PACKAGE</legend>
                
                <div class = "search">
                    <label for="location">Location</label>
                    : <input type="text" id="location" name="location" size="60px" required><br>
                
                <input type="submit" name="findPackage" value="Search"/>
                </div>
        </form>
    </body>
</html>