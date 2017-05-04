<?php
	//connection
	include 'connect.php';
	//query
	$sql = "SELECT COUNT(*) AS COUNT FROM idtable";
	$arr = array();
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0) {
		while($row = mysqli_fetch_assoc($result)) {
			$arr[] = $row;
		}
	}
	//display the count
	echo json_encode($arr);
?>
