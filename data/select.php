<?php
	//connection
	include 'connect.php';
	//query
	$sql = "SELECT D.UID AS UID,ID_TYPE,ID_NUMBER,NAME,GENDER,DOB,RELIGION,MOTHER_TONGUE,ADDRESS,PINCODE,TEN,TWE,UG,PG,DR,WORK_TYPE FROM idtable as I, detailtable as D, addresstable as A, educationtable as E,worktable as W WHERE I.UID = D.UID AND D.UID = A.UID AND A.UID = E.UID AND E.UID = W.UID";
	$arr = array();
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0) {
		while($row = mysqli_fetch_assoc($result)) {
			$arr[] = $row;
		}
	}
	//send output 
	echo json_encode($arr);
?>
