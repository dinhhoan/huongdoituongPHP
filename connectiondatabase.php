<?php

$username = "root";
$password = "";
$host = "localhost";
$database = "test";

$connection = new mysqli($host,$username, $password, $database);
if ($connection->connect_error) {
	# code...
	die("connection is error");
}
$sql = "SELECT * FROM infomation";
$result = mysqli_query($connection, $sql);
if(!$result){
	die("error".mysqli_error($connection));
}

?>
<html>
<body>
	<table border="1">
		<th>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Age</td>
				<td>Job</td>

			</tr>
		</th>
		<tbody>
			<?php 
			if (mysqli_num_rows($result)>0) {
	# code...
				while ($row = mysqli_fetch_assoc($result)) {
		# code...
					?>
					<tr>
						<td><?php echo $row['id']?></td>
						<td><?php echo $row['Name']?></td>
						<td><?php echo $row['Age']?></td>
						<td><?php echo $row['job']?></td>

					</tr>
					<?php
				}

			}
			?>

		</tbody>
	</table>
</body>
</html>