<?php include "db.php" ?>
<?php include "function.php" ?>

<?php


if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$address=$_POST['address'];	
	$id = $_POST['id'];



	$query="UPDATE user SET name='$name', address='$address' WHERE id=$id";
	$result=mysqli_query($connection,$query);
	if(!$result){
		die("UPDATED FAILED" .mysqli_error($result));
	}
 }
 	
	



?>


<!DOCTYPE html>
<html>
<head>
	<title>TEMP</title>
</head>
<body>
<form method="POST" action="index.php">
	<table> 
		<tr> 
			<td> Name : </td>
			<td> <input type="text" name="name" placeholder="NAME PLEASE">
			</td>
		</tr>
		<tr>
			<td> Email : </td>
			<td> <input type="text" name="address" placeholder="ADDRESS PLEASE"></td>
		</tr>
		<tr>
			<td>
				<select>
					<?php
						
						showdata();



					?>


				</select>
			</td>
		</tr>

		<tr>

			
			<td> <input type="submit" name="submit"> </td>
		</tr>
	</table>
</form>
</body>
</html>