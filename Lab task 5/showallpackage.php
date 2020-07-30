<?php  
require_once 'controller/packageinfo.php';

$travel = fetchAllPackage();

?>
<!DOCTYPE html>
<html>
    <style>

    </style>

    <body>
    <fieldset>
        <legend>DISPLAY</legend>
            
        <table>
	<thead>
		<tr>
			<th>Location</th>
			<th>Information</th>
			<th>Duration</th>
			<th>Price</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($travel as $i => $travel_info): ?>
			<tr>
				<td><?php echo $travel_info['location'] ?></td>
				<td><?php echo $travel_info['information'] ?></td>
                <td><?php echo $travel_info['duration'] ?></td>
                <td><?php echo $travel_info['image'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $travel_info['image'] ?>" alt="<?php echo $travel_info['Name'] ?>"></td>
				<td><a href="editpackage.php?id=<?php echo $travel_info['ID'] ?>">Edit</a>&nbsp<a href="controller/deletepackage.php?id=<?php echo $travel_info['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
    </body>
</html>