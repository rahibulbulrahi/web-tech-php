<?php 

require_once 'database.php';

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

function showAllPackage(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `package` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showPackage($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `package` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

?>