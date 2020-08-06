<?php 

require_once 'controller/packageinfo.php';
$student = fetchPackage($_GET['id']);

 ?>
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

 <form action="controller/updatepackage.php" method="POST" enctype="multipart/form-data">
  
 <fieldset>
     <legend>EDIT PACKAGE</legend>

    <div class = "info">
                    
      <label for="location">Location</label>
      : <input value="<?php echo $travel_info['location'] ?>" type="text" id="location" name="location" size="50px"><br>
                        
      <label for="information">Information</label>
      : <input value="<?php echo $travel_info['information'] ?>" type="text" id="information" name="information" size="50px"><br>
                        
      <label for="duration">Duration</label>
      : <input value="<?php echo $travel_info['duration'] ?>" type="text" id="duration" name="duration" size="50px"><br>
                    
      <label for="price">Price</label>
      : <input value="<?php echo $travel_info['price'] ?>" type="text" id="price" name="price" size="50px"><br>
                        
      <input type="file" name="image"><br><br>
                    
      <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

      <input type="submit" name = "updatepackage" value="Update">
      
      <input type="reset"> 
    </div>

</form> 

</body>
</html>