<?php include 'db.php'; 
	if($_SERVER['REQUEST_METHOD']==='POST'){
		$loginuser = $_POST['user'];
		$loginpass = $_POST['pass'];
		$sql = "select * from person where email='$loginuser' and password='$loginpass'";
		$res = mysqli_query($con, $sql);
		$count = 0;
		if($res){
			while($r = mysqli_fetch_array($res)){
				$count = 1;
				$_SESSION['id'] = $r['id'];
				header('Location: http://localhost/home.php');
				die();
			}
			if($count === 0){
				echo "<script>alert('Unknown User!');</script>";
				header('Location: http://localhost/services.php');
				die();
			}
			else if($count!==1){
				echo "<script>alert('Database Error! Conflicting users! Please head to report page and send us a mail using the built in form to enable the admins look into this issue!');</script>";
			}
		}
		else{
			echo "<script>alert('Unknown Error! We will get back shortly!');</script>";
			echo mysqli_error($con);
		}
	}





?>