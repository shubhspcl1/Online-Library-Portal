<?php include 'db.php';
$id=$_SESSION['id'];
$iid=$_GET['iid'];
$sql="select book_id from issue where issue_id='$iid' and person_id='$id'";
$bookid=0;
$date=date('Y-m-d');
$res=mysqli_query($con, $sql);
while($r = mysqli_fetch_array($res)){
	$bookid=$r['book_id'];
}
$sql1="insert into return1 values('$iid', '$id', '$bookid', '$date', 0)";
$res1=mysqli_query($con, $sql1);
if($res){
	$sql2="call fine('$iid')";
	$res2=mysqli_query($con, $sql2);
	if($res2){
		//echo "<script>alert('Complete');</script>";
		header("location: http://localhost/home.php");
		die();
	}
	else{
		echo "error";
	}
}
else{
	echo mysqli_error();
}
mysqli_close($con);
?>