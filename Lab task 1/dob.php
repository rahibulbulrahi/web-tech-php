<!DOCTYPE html>
<html>
    <style>
        div.date
        {
            text-align: center;
            float: left;
            margin: 2px;
        }
        div.month
        {
            text-align: center;
            float: left;
            margin: 2px;
        }
        div.year
        {
            text-align: center;
            float: left;
            margin: 2px;
        }
    </style>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <fieldset>
                <legend style="font-family: Calibri;">DATE OF BIRTH</legend>

                <div class ="date">
                    <label for="date">dd</label><br>
                    <input type="text" id="date" name="date" size="5"> /
                </div>

                <div class="month">
                    <label for="month">mm</label><br>
                    <input type="text" id="month" name="month" size="5"> /
                </div>

                <div class="year">
                    <label for="year">yyyy</label><br>
                    <input type="text" id="year" name="year" size="6">
                </div>

                <br><br><br>
                <hr>
                <input type="submit" value="Submit">
            </fieldset>
        </form>
        <br>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $date = $_POST['date'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            if(empty($date))
            {
                echo "Date is EMPTY! ";
            }
            if(empty($month))
            {
                echo "Month is EMPTY! ";
            }
            if(empty($year))
            {
                echo "Year is EMPTY! ";
            }
            else 
            {
                echo"Your DOB is: $date/$month/$year";
            }
       }
        ?>

    </body>
</html>