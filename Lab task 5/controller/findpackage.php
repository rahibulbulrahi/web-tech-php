<?php

require_once '../function.php';

if (isset($_POST['findPackage'])) {
	
		echo $_POST['location'];

    try {
    	
    	$allSearchedUsers = searchPackage($_POST['location']);
    	require_once '../searchalluser.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

