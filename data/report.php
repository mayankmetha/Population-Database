<?php 
	//connection
	include 'connect.php';
	$t1=$_POST['t1'];
	$t2=$_POST['t2'];
	$t3=$_POST['t3'];
	$t4=$_POST['t4'];
	$t5=$_POST['t5'];
	$sql="";
	//generate report based on table selected
	if($t1==0&&$t2==0&&$t3==0&&$t4==0&&$t5==0) {
		//$sql="";
	} else if($t1==0&&$t2==0&&$t3==0&&$t4==0&&$t5==1) {
		$sql="SELECT * FROM worktable";
	} else if($t1==0&&$t2==0&&$t3==0&&$t4==1&&$t5==0) {
		$sql="SELECT * FROM educationtable";
	} else if($t1==0&&$t2==0&&$t3==0&&$t4==1&&$t5==1) {
		$sql="SELECT * FROM educationtable as e, worktable as w WHERE e.uid=w.uid";
	} else if($t1==0&&$t2==0&&$t3==1&&$t4==0&&$t5==0) {
		$sql="SELECT * FROM addresstable";
	} else if($t1==0&&$t2==0&&$t3==1&&$t4==0&&$t5==1) {
		$sql="SELECT * FROM addresstable as a, worktable as w WHERE a.uid=w.uid";
	} else if($t1==0&&$t2==0&&$t3==1&&$t4==1&&$t5==0) {
		$sql="SELECT * FROM addresstable as a, educationtable as e WHERE a.uid=e.uid";
	} else if($t1==0&&$t2==0&&$t3==1&&$t4==1&&$t5==1) {
		$sql="SELECT * FROM addresstable as a, educationtable as e, worktable as w WHERE a.uid=e.uid AND e.uid=w.uid";
	} else if($t1==0&&$t2==1&&$t3==0&&$t4==0&&$t5==0) {
		$sql="SELECT * FROM detailtable";
	} else if($t1==0&&$t2==1&&$t3==0&&$t4==0&&$t5==1) {
		$sql="SELECT * FROM detailtable as d, worktable as w WHERE d.uid=w.uid";
	} else if($t1==0&&$t2==1&&$t3==0&&$t4==1&&$t5==0) {
		$sql="SELECT * FROM detailtable as d, educationtable as e WHERE d.uid=e.uid";
	} else if($t1==0&&$t2==1&&$t3==0&&$t4==1&&$t5==1) {
		$sql="SELECT * FROM detailtable as d, educationtable as e, worktable as w WHERE d.uid=e.uid AND e.uid=w.uid";
	} else if($t1==0&&$t2==1&&$t3==1&&$t4==0&&$t5==0) {
		$sql="SELECT * FROM detailtable as d, addresstable as a WHERE d.uid=a.uid";
	} else if($t1==0&&$t2==1&&$t3==1&&$t4==0&&$t5==1) {
		$sql="SELECT * FROM detailtable as d, addresstable as a, worktable as w WHERE d.uid=a.uid AND a.uid=w.uid";
	} else if($t1==0&&$t2==1&&$t3==1&&$t4==1&&$t5==0) {
		$sql="SELECT * FROM detailtable as d, addresstable as a, educationtable as e WHERE d.uid=a.uid AND a.uid=e.uid";
	} else if($t1==0&&$t2==1&&$t3==1&&$t4==1&&$t5==1) {
		$sql="SELECT * FROM detailtable as d, addresstable as a, educationtable as e, worktable as w WHERE d.uid=a.uid AND a.uid=e.uid AND e.uid=w.uid";
	} else if($t1==1&&$t2==0&&$t3==0&&$t4==0&&$t5==0) {
		$sql="SELECT * FROM idtable";
	} else if($t1==1&&$t2==0&&$t3==0&&$t4==0&&$t5==1) {
		$sql="SELECT * FROM idtable as i, worktable as w WHERE i.uid=w.uid";
	} else if($t1==1&&$t2==0&&$t3==0&&$t4==1&&$t5==0) {
		$sql="SELECT * FROM idtable as i, educationtable as e WHERE i.uid=e.uid";
	} else if($t1==1&&$t2==0&&$t3==0&&$t4==1&&$t5==1) {
		$sql="SELECT * FROM idtable as i, educationtable as e, worktable as w WHERE i.uid=e.uid AND e.uid=w.uid";
	} else if($t1==1&&$t2==0&&$t3==1&&$t4==0&&$t5==0) {
		$sql="SELECT * FROM idtable as i, addresstable as a WHERE i.uid=a.uid";
	} else if($t1==1&&$t2==0&&$t3==1&&$t4==0&&$t5==1) {
		$sql="SELECT * FROM idtable as i, addresstable as a, worktable as w WHERE i.uid=a.uid AND a.uid=w.uid";
	} else if($t1==1&&$t2==0&&$t3==1&&$t4==1&&$t5==0) {
		$sql="SELECT * FROM idtable as i, addresstable as a, educationtable as e WHERE i.uid=a.uid AND a.uid=e.uid";
	} else if($t1==1&&$t2==0&&$t3==1&&$t4==1&&$t5==1) {
		$sql="SELECT * FROM idtable as i, addresstable as a, educationtable as e, worktable as w WHERE i.uid=a.uid AND a.uid=e.uid AND e.uid=w.uid";
	} else if($t1==1&&$t2==1&&$t3==0&&$t4==0&&$t5==0) {
		$sql="SELECT * FROM idtable as i, detailtable as d WHERE i.uid=d.uid";
	} else if($t1==1&&$t2==1&&$t3==0&&$t4==0&&$t5==1) {
		$sql="SELECT * FROM idtable as i, detailtable as d, worktable as w WHERE i.uid=d.uid AND d.uid=w.uid";
	} else if($t1==1&&$t2==1&&$t3==0&&$t4==1&&$t5==0) {
		$sql="SELECT * FROM idtable as i, detailtable as d, educationtable as e WHERE i.uid=d.uid AND d.uid=e.uid";
	} else if($t1==1&&$t2==1&&$t3==0&&$t4==1&&$t5==1) {
		$sql="SELECT * FROM idtable as i, detailtable as d, educationtable as e, worktable as w WHERE i.uid=d.uid AND d.uid=e.uid AND e.uid=w.uid";
	} else if($t1==1&&$t2==1&&$t3==1&&$t4==0&&$t5==0) {
		$sql="SELECT * FROM idtable as i, detailtable as d, addresstable as a WHERE i.uid=d.uid AND d.uid=a.uid";
	} else if($t1==1&&$t2==1&&$t3==1&&$t4==0&&$t5==1) {
		$sql="SELECT * FROM idtable as i, detailtable as d, addresstable as a, worktable as w WHERE i.uid=d.uid AND d.uid=a.uid AND a.uid=w.uid";
	} else if($t1==1&&$t2==1&&$t3==1&&$t4==1&&$t5==0) {
		$sql="SELECT * FROM idtable as i, detailtable as d, addresstable as a, educationtable as e WHERE i.uid=d.uid AND d.uid=a.uid AND a.uid=e.uid";
	} else if($t1==1&&$t2==1&&$t3==1&&$t4==1&&$t5==1) {
		$sql="SELECT * FROM idtable as i, detailtable as d, addresstable as a, educationtable as e, worktable as w WHERE i.uid=d.uid AND d.uid=a.uid AND a.uid=e.uid AND e.uid=w.uid";
	}
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
