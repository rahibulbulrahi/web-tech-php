
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
        <th>Location</th>
		<th>Information</th>
		<th>Duration</th>
		<th>Price</th>
		<th>Image</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedUsers as $i => $user): ?>
			<tr>
				<td><a href="showUser.php?id=<?php echo $user['ID'] ?>"><?php echo $user['ID'] ?></a></td>
				<td><?php echo $user['Username'] ?></td>
				<td><a href="editUser.php?id=<?php echo $user['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteUser.php?id=<?php echo $user['ID'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>