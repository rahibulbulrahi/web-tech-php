<?php 

require_once 'db_connect.php';

function addStudent($data){
	$conn = db_conn();
    $selectQuery = "INSERT into user_info (Name, Surname, Username, Password, image)
VALUES (:name, :surname, :username, :password, :image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':surname' => $data['surname'],
        	':username' => $data['username'],
        	':password' => $data['password'],
        	':image' => $data['image']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

?>