<?php
	//connection
	include 'connect.php';
	//variables
	$idtype = $_POST["id_type"];
	$idnumber = $_POST["id_num"];
	$name = $_POST["name"];
	$gender = $_POST["gender"];
	$dob = $_POST["dob"];
	$religion = $_POST["religion"];
	$mothertongue = $_POST["mother_tongue"];
	$address = $_POST["address"];
	$pincode = $_POST["pincode"];
	$ten = $_POST["ten"]==1?1:0;
	$twe = $_POST["twe"]==1?1:0;
	$ug = $_POST["ug"]==1?1:0;
	$pg = $_POST["pg"]==1?1:0;
	$dr = $_POST["dr"]==1?1:0;
	$work = $_POST["work"];
	$UID;
	$mes=0;
	//insert detailtable
	$sql1 = "INSERT INTO `detailtable`(`NAME`, `GENDER`, `DOB`, `RELIGION`, `MOTHER_TONGUE`) VALUES('".$name."','".$gender."','".$dob."','".$religion."','".$mothertongue."')";
	if (mysqli_query($conn, $sql1)) {
		//$mes=0;
	} else {
		$mes=1;
	}
	//insert idtable
	$sql2 = "INSERT INTO `idtable`(`ID_NUMBER`, `ID_TYPE`) VALUES ('".$idnumber."','".$idtype."')";
	if (mysqli_query($conn, $sql2)) {
    		//$mes=0;
	} else {
    		$mes=1;
	}
	//insert addresstable
	$sql3 = "INSERT INTO `addresstable`(`PINCODE`, `ADDRESS`) VALUES(".$pincode.",'".$address."')";
	if (mysqli_query($conn, $sql3)) {
    		//$mes=0;
	} else {
    		$mes=1;
	}
	//insert educationtable
	$sql4 = "INSERT INTO `educationtable`(`TEN`, `TWE`, `UG`, `PG`, `DR`) VALUES(".$ten.",".$twe.",".$ug.",".$pg.",".$dr.")";
	if (mysqli_query($conn, $sql4)) {
    		//$mes=0;
	} else {
    		$mes=1;
	}
	//insert worktable
	$sql5 = "INSERT INTO `worktable`(`WORK_TYPE`) VALUES('".$work."')";
	if (mysqli_query($conn, $sql5)) {
    		//$mes=0;
	} else {
    		$mes=1;
	}
	//send post status
	echo $msg;
?>
