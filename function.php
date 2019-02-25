<?php include "db.php"; ?>
<?php 


function showdata(){	
	global $connection;
$query="SELECT * FROM user";
$result=mysqli_query($connection,$query);
	// if(!$result){
	// 	die("ERROR");
	// }
	// else
	// 	echo "SUCESSFUL";

	while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		echo "<option value='id'> $id </option> ";

	}
}



?>