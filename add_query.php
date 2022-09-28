<?php
	require_once 'conn.php';
	if(ISSET($_POST['add'])){
		if($_POST['notice_topic'] != ""){
			$topic = $_POST['notice_topic'];
			$desc = $_POST['notice_desc'];
			$update = $_POST['upload_date'];
			$endate = $_POST['end_date'];
			$que1 = "INSERT INTO `notice`(`notice_id`, `notice_topic`, `notice_desc`, `upload_date`, `end_date`) VALUES (NULL, '$topic', '$desc', '$update', '$endate')";
			echo $que1. "|";
			$r = $conn->query($que1);
			if ($r){
				header('location:Admin_screen.php');
			}
			else{
				echo "error ". gettype($r);
			}
		}
	}
?>