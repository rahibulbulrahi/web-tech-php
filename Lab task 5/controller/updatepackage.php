<?php  
require_once '../function.php';


if (isset($_POST['updatepackage'])) {
	$data['location'] = $_POST['location'];
    $data['information'] = $_POST['information'];
    $data['duration'] = $_POST['duration'];
    $data['price'] = $_POST['price'];
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);


  if (updatePackage($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../showpackage.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>