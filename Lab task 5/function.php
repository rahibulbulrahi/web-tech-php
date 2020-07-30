<?php 

require_once 'db_connect.php';

function addpackage($data){
	$conn = db_conn();
    $selectQuery = "INSERT into package (location, 	information, duration, price, image)
VALUES (:location, :information, :duration, :price, :image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':location' => $data['location'],
        	':information' => $data['information'],
        	':duration' => $data['duration'],
        	':price' => $data['price'],
        	':image' => $data['image']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

?>