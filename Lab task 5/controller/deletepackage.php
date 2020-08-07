<?php 

require_once '../function.php';

if (deletePackage($_GET['id'])) {
    header('Location: ../showallpackage.php');
}

 ?>