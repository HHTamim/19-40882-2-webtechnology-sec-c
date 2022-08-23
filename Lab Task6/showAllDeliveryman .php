<?php  
require_once 'controller/DeliverymanInfo.php';

$deliveryman = fetchAllDeliveryman();


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Surname</th>
			<th>Username</th>
			<th>Password</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($deliveryman as $i => $deliveryman): ?>
			<tr>
				<td><a href="showDeliveryman.php?id=<?php echo $deliveryman ['ID'] ?>"><?php echo $deliveryman ['Name'] ?></a></td>
				<td><?php echo $deliveryman ['Surname'] ?></td>
				<td><?php echo $deliveryman ['Username'] ?></td>
				<td><?php echo $deliveryman ['Password'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $deliveryman ['image'] ?>" alt="<?php echo $deliveryman ['Name'] ?>"></td>
				<td><a href="editDeliverymanInfo.php?id=<?php echo $deliveryman ['ID'] ?>">Edit</a>&nbsp<a href="controller/deleteDeliverymanInfo.php?id=<?php echo $student['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>