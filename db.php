<?php 
	$con = mysqli_connect('localhost', 'root', 'root', 'library');
	if(!$con){
		die("error".mysqli_connect_error($con));
	}
	session_start();
	//$_SESSION['id'] = 0;
?>