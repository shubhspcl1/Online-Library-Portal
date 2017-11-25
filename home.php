<?php 
$id=0;
include 'db.php';
$id = $_SESSION['id'];
//echo "<script>alert($id);</script>";
if($id!==Null){
 ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Online Library Portal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Compiled and minified CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- Place favicon.ico in the root directory -->
    </head>
    <body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Online Library Portal</a>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="index.php">Home</a>
        </li>
        <?php
        if ($id) {?>
        	<li class="active">
          <a href="logout.php">Logout</a>
        </li>
       <?php }
       else{
        ?>
        <li class="active">
          <a href="services.php">Services</a>
        </li>
        <?php }?>
        <li>
              <a href="http://localhost/books.php">Books</a>
        </li>
        <li>
          <a href="report.php">Report a Problem!</a>
        </li>
        <li>
          <a href="home.php">Profile</a>
        </li>
        <li>
          <a href="about.php">About us</a>
        </li>
      </ul>
    </div>
  </nav><br><br><br><br><br><br>
  	<div class="container">	
  		






     	 <ul class="nav nav-tabs">
  			<li class="active" onclick="detail(this)"><a href="#">Details</a></li>
  			<li onclick="issue(this)"><a href="#">Issues</a></li>
  			<li onclick="history(this)"><a href="#">History</a></li>
		</ul>

	



		<table class="table table-hover" id ="details"><br><br>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "select * from person";
      $res = mysqli_query($con, $sql);
      if($res){
      while ($r = mysqli_fetch_array($res)) {
          echo "<tr><td>".$r['id']."</td><td>".$r['name']."</td><td>".$r['address']."</td><td>".$r['phone']."</td><td>".$r['email']."</td></tr>";
      }}
      else{
      	echo mysqli_error($con);
      }
       ?>
    </tbody>
  </table>











	<table class="table table-hover" id ="issue" style="display: none;"><br><br>
    <thead>
      <tr>
        <th>Transaction ID</th>
        <th>Book ID</th>
        <th>Issue Date</th>
        <th>Due Date</th>
        <th>Return</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql1 = "Select * from issue where person_id='$id'";
      $res1 = mysqli_query($con, $sql1);
      if($res1){
      while ($r = mysqli_fetch_array($res1)) {
      	  $issue = $r['issue_id'];
      	  $sql2 = "select return_date from return1 where issue_id='$issue'";
      	  $res2=mysqli_query($con, $sql2);
      	  $r2 = mysqli_fetch_array($res2);
      	  if(is_null($r2[0])){
      	  echo "<tr><td>".$r['issue_id']."</td><td>".$r['book_id']."</td><td>".$r['issue_date']."</td><td>".$r['due_date']."</td><td><a class='waves-effect waves-light btn' href = 'http://localhost/return.php/?iid=$issue'>Return Now!</a></td></tr>";
      	}
      	else{
      		echo "<tr><td>".$r['issue_id']."</td><td>".$r['book_id']."</td><td>".$r['issue_date']."</td><td>".$r['due_date']."</td><td>".$r2[0]."</td></tr>";
      	}
      }}
      else{
      	die (mysqli_error($con));
      }
       ?>
    </tbody>
  </table>


  <table class="table table-hover" id ="history" style="display: none;margin-top: -5%;"><br><br>
    <thead>
      <tr>
        <th>Transaction ID</th>
        <th>Book ID</th>
        <th>Book Name</th>
        <th>Issue Date</th>
        <th>Return Date</th>
        <th>Fine Paid</th>
      </tr>
    </thead>
    <tbody>
      <?php
      		$sql2 = "Select * from return1, issue where return1.person_id='$id' and issue.person_id='$id' and return1.person_id = issue.person_id and issue.issue_id=return1.issue_id";
      		$res2 = mysqli_query($con, $sql2);
      		$count=0;
      		while($r = mysqli_fetch_array($res2)){
      			$count+=1;
      			echo "<tr><td>".$r['issue_id']."</td><td>".$r['book_id']."</td><td>Book_Name</td><td>".$r['issue_date']."</td><td>".$r['return_date']."</td><td>".$r['fine']."</td></tr>";
      		}
      		if(!$count){
      			echo "<tr><td>Null</td><td>Null</td><td>Null</td><td>Null</td><td>Null</td><td>Null</td></tr>";
      		}

       ?>
    </tbody>
  </table>
	</div>


	<script type="text/javascript">
		function detail(e){
			$("li").removeClass('active');
			$(e).addClass('active');
			$(".table").css({
				display: 'none'
			});
			$("#details").css({
				display: 'block'
			});
			//$("");
		}
		function issue(e){
			$("li").removeClass('active');
			$(e).addClass('active');
			$(".table").css({
				display: 'none'
			});
			$("#issue").css({
				display: 'block'
			});
		}
		function history(e){
			$("li").removeClass('active');
			$(e).addClass('active');
			$(".table").css({
				display: 'none'
			});
			$("#history").css({
				display: 'block'
			});
		}

	</script>
</body></html>




































<?php }
else{
	echo "<script>alert('Please Login First!');window.location.href='http://localhost/services.php';</script>";
}


 ?>