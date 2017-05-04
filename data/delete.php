<?php
	//connection
	include 'connect.php';
	//variables
	$UID = $_POST["uid"];
	$mes=0;
	//delete detailtable
	$sql1 = "DELETE FROM detailtable WHERE UID=".$UID."";
	if (mysqli_query($conn, $sql1)) {
		//$mes=0;
	} else {
		$mes=1;
	}
	//delete idtable
	$sql2 = "DELETE FROM idtable WHERE UID=".$UID."";
	if (mysqli_query($conn, $sql2)) {
    		//$mes=0;
	} else {
    		$mes=1;
	}
	//delete addresstable
	$sql3 = "DELETE FROM addresstable WHERE UID=".$UID."";
	if (mysqli_query($conn, $sql3)) {
    		//$mes=0;
	} else {
    		$mes=1;
	}
	//delete educationtable
	$sql4 = "DELETE FROM educationtable WHERE UID=".$UID."";
	if (mysqli_query($conn, $sql4)) {
    		//$mes=0;
	} else {
    		$mes=1;
	}
	//delete worktable
	$sql5 = "DELETE FROM worktable WHERE UID=".$UID."";
	if (mysqli_query($conn, $sql5)) {
    		//$mes=0;
	} else {
    		$mes=1;
	}
	//send post status
	echo $mes;
?>
