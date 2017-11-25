<?php include 'db.php'; 
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$registeruser = $_POST['username'];
		$registername = $_POST['name'];
		$registerpass = $_POST['password'];
		$registercontact = $_POST['contact'];
		$registercity = $_POST['city'];
		$id = 0;
		$sql = 'Select id from person order by id desc limit 1';
		$res = mysqli_query($con, $sql);
		while ($r = mysqli_fetch_array($res)) {
		    $id = $r['id'];
		}
		$id+=1;
		$sql = "Insert into person values('$id', '$registername', '$registercity', '$registercontact', '$registeruser', '$registerpass')";
		$res = mysqli_query($con, $sql);
		if($res){
			echo "Automatically Loging in! Hang on!";
			$_SESSION['id'] = $id;
			header('Location: http://localhost/home.php');
			die();
		}
		else{
			echo "<script>alert('Unknown Error! We will get back shortly!');</script>";
			header('Location: http://localhost/register.php');
			die();
		}
	}
?>