<?php
	//connection
	include 'connect.php';
	//variables
	$uid = $_POST["uid"];
	$sql;
	$m;
	//update detailtable
	if(isset($_POST["name"])&& $_POST["name"]!="") {
		$name = $_POST["name"];
		$sql = "UPDATE detailtable SET NAME='".$name."' WHERE UID=".$uid."";
		if (mysqli_query($conn, $sql)) {
			$m=0;
		} else {
			$m=1;
		}
	}
	if(isset($_POST["gender"])&&$_POST["gender"]!=""){
		$gender = $_POST["gender"];
		$sql = "UPDATE detailtable SET GENDER='".$gender."' WHERE UID=".$uid."";
		if (mysqli_query($conn, $sql)) {
			$m=0;
		} else {
			$m=1;
		}
	}
	if(isset($_POST["dob"])&&$_POST["dob"]!=""){
		$dob = $_POST["dob"];
		$sql = "UPDATE detailtable SET DOB='".$dob."' WHERE UID=".$uid."";
		if (mysqli_query($conn, $sql)) {
			$m=0;
		} else {
			$m=1;
		}
	}
	if(isset($_POST["religion"])&&$_POST["religion"]!=""){
		$religion = $_POST["religion"];
		$sql = "UPDATE detailtable SET RELIGION='".$religion."' WHERE UID=".$uid."";
		if (mysqli_query($conn, $sql)) {
			$m=0;
		} else {
			$m=1;
		}
	}
	if(isset($_POST["mother_tongue"])&&$_POST["mother_tongue"]!=""){
		$mothertongue = $_POST["mother_tongue"];
		$sql = "UPDATE detailtable SET MOTHER_TONGUE='".$mothertongue."' WHERE UID=".$uid."";
		if (mysqli_query($conn, $sql)) {
			$m=0;
		} else {
			$m=1;
		}
	}
	//update idtable
	if(isset($_POST["id_type"])&&$_POST["id_type"]!="") {
		$idtype = $_POST["id_type"];
		$sql = "UPDATE idtable SET ID_TYPE='".$idtype."' WHERE UID=".$uid."";
		if (mysqli_query($conn, $sql)) {
			$m=0;
		} else {
			$m=1;
		}
	}
	if(isset($_POST["id_num"])&&$_POST["id_num"]!="") {
		$idnum = $_POST["id_num"];
		$sql = "UPDATE idtable SET ID_NUMBER='".$idnum."' WHERE UID=".$uid."";
		if (mysqli_query($conn, $sql)) {
			$m=0;
		} else {
			$m=1;
		}
	}
	//update addresstable
	if(isset($_POST["address"])&&$_POST["address"]!="") {
		$address = $_POST["address"];
		$sql = "UPDATE addresstable SET ADDRESS='".$address."' WHERE UID=".$uid."";
		if (mysqli_query($conn, $sql)) {
			$m=0;
		} else {
			$m=1;
		}
	}
	if(isset($_POST["pincode"])&&$_POST["pincode"]!="") {
		$pincode = $_POST["pincode"];
		$sql = "UPDATE addresstable SET PINCODE=".$pincode." WHERE UID=".$uid."";
		if (mysqli_query($conn, $sql)) {
			$m=0;
		} else {
			$m=1;
		}
	}
	//update worktable
	if(isset($_POST["work"])&&$_POST["work"]!="") {
		$work = $_POST["work"];
		$sql = "UPDATE worktable SET WORK_TYPE='".$work."' WHERE UID=".$uid."";
		if (mysqli_query($conn, $sql)) {
			$m=0;
		} else {
			$m=1;
		}
	}
	//update educationtable
	if(isset($_POST["ten"])&&$_POST["ten"]!="") {
		$ten = $_POST["ten"]==1?1:0;
		$sql = "UPDATE educationtable SET TEN='".$ten."' WHERE UID=".$uid."";
		if (mysqli_query($conn, $sql)) {
			$m=0;
		} else {
			$m=1;
		}
	}
	if(isset($_POST["twe"])&&$_POST["twe"]!="") {
		$twe = $_POST["twe"]==1?1:0;
		$sql = "UPDATE educationtable SET TWE='".$twe."' WHERE UID=".$uid."";
		if (mysqli_query($conn, $sql)) {
			$m=0;
		} else {
			$m=1;
		}
	}
	if(isset($_POST["ug"])&&$_POST["ug"]!="") {
		$ug = $_POST["ug"]==1?1:0;
		$sql = "UPDATE educationtable SET UG='".$ug."' WHERE UID=".$uid."";
		if (mysqli_query($conn, $sql)) {
			$m=0;
		} else {
			$m=1;
		}
	}
	if(isset($_POST["pg"])&&$_POST["pg"]!="") {
		$pg = $_POST["pg"]==1?1:0;
		$sql = "UPDATE educationtable SET PG='".$pg."' WHERE UID=".$uid."";
		if (mysqli_query($conn, $sql)) {
			$m=0;
		} else {
			$m=1;
		}
	}
	if(isset($_POST["dr"])&&$_POST["dr"]!="") {
		$dr = $_POST["dr"]==1?1:0;
		$sql = "UPDATE educationtable SET DR='".$dr."' WHERE UID=".$uid."";
		if (mysqli_query($conn, $sql)) {
			$m=0;
		} else {
			$m=1;
		}
	}
	//send post status
	echo $m;
?>
