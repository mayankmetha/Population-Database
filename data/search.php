<?php
	//connection
	include 'connect.php';
	$find = $_POST['find'];	
	//search query
	$sql = "SELECT D.UID AS UID,ID_TYPE,ID_NUMBER,NAME,GENDER,DOB,RELIGION,MOTHER_TONGUE,ADDRESS,PINCODE,TEN,TWE,UG,PG,DR,WORK_TYPE FROM idtable AS I, detailtable AS D,addresstable AS A,educationtable AS E,worktable AS W WHERE (I.UID = D.UID AND D.UID = A.UID AND A.UID = E.UID AND E.UID = W.UID) AND (D.UID LIKE '%".$find."%' OR ID_TYPE LIKE '%".$find."%' OR ID_NUMBER LIKE '%".$find."%' OR NAME LIKE '%".$find."%' OR GENDER LIKE '%".$find."%' OR DOB LIKE '%".$find."%' OR RELIGION LIKE '%".$find."%' OR MOTHER_TONGUE LIKE '%".$find."%' OR ADDRESS LIKE '%".$find."%' OR PINCODE LIKE '%".$find."%' OR TEN LIKE '%".$find."%' OR TWE LIKE '%".$find."%' OR UG LIKE '%".$find."%' OR PG LIKE '%".$find."%' OR DR LIKE '%".$find."%' OR WORK_TYPE LIKE '%".$find."%')";
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
