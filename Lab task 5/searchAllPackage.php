
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<table>
	<thead>
		<tr>
        <th>Location ID</th>
        <th>Location</th>
		<th>Duration</th>
		<th>Price</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedUsers as $i => $travel): ?>
			<tr>
				<td><a href="showpackage.php?id=<?php echo $travel['id'] ?>"><?php echo $travel['id'] ?></a></td>
                <td><?php echo $travel['location'] ?></td>
                <td><?php echo $travel['duration'] ?></td>
                <td><?php echo $travel['price']?></td>
				<td><a href="editpackage.php?id=<?php echo $user['ID'] ?>">Edit</a>&nbsp<a href="controller/deletepackage.php?id=<?php echo $user['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>