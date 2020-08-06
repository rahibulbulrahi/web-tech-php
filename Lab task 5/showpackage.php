<?php  
require_once 'controller/packageinfo.php';

$student = fetchPackage($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
        <th>Location</th>
		<th>Information</th>
		<th>Duration</th>
		<th>Price</th>
		<th>Image</th>
		<th>Action</th>
	</tr>
	<tr>
		<td><a href="showpackage.php?id=<?php echo $travel_info['id'] ?>"><?php echo $travel_info['location'] ?></a></td>
		<td><?php echo $travel_info['location'] ?></td>
		<td><?php echo $travel_info['information'] ?></td>
        <td><?php echo $travel_info['duration'] ?></td>
        <td><?php echo $travel_info['image'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $student['image'] ?>" alt="<?php echo $student['location'] ?>"></td>
	</tr>

</table>


</body>
</html>