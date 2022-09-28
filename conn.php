<?php
	$conn = new mysqli("localhost", "root", "", "notice_board");
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>