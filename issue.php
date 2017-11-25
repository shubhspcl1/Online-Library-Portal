<?php include 'db.php'; 
$id = $_SESSION['id'];
$bid = $_GET['bid'];
$issueid = 0;
$sql = "call issueid('$bid')";
$res = mysqli_query($con, $sql, MYSQLI_STORE_RESULT);
if($res){
	while($r = mysqli_fetch_array($res)){
	$issueid = $r[0];
	//mysqli_free_result($r);
	//mysqli_free_result($res);
	mysqli_free_result($con);
}}
else{
	echo "failed";
}
mysqli_close($con);
include 'db.php';
$date = date('Y-m-d');
$sql1 = "Insert into issue values('$issueid', '$id', '$bid', '$date', null)";
$res1 = mysqli_query($con, $sql1);
if($res1){
	$sql2="call due('$issueid')";
	$res2=mysqli_query($con, $sql2);
	if($res2){
		echo "<script>alert('Issued');</script>";
		header("location: http://localhost/home.php");
		header("location: http://localhost/home.php");
		die();
	}
	else{
		echo "error"; 
	}
}
else{
	echo "failed";
	echo mysqli_error($con);
}
?>