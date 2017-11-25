<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Services || </title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css">
		body{
			overflow: hidden;
		}
	</style>
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
					<a href="about.php">About us</a>
				</li>
			</ul>
		</div>
	</nav>

<div class="container" style="width: 100%;background-image: url('images/library.jpg');background-repeat: no-repeat;background-size: 100%;margin-top: 3.5%;"><br><br><br><br>
	<div class="form-group" style="width: 30%;color: black;margin-top: 3%;margin-left: 36%;padding: 1%;background-color: white;">
		<form method="post" action="login.php">
			<h3>Please Login to continue!</h3><hr>
			<label id="change">
				Email
			</label>
			<input type="email" name="user" class="form-control" required><br>
			<label>
				Password:
			</label>
			<input type="password" name="pass" class="form-control" required><br><br>
			<input type="submit" value="Login" class="btn-default btn" style="width: 100%;"><br><br>
			<a href="register.php">Not Yet Registered? Check out this link!</a>
		</form>
	</div><br><br><br><br>

</div>
<script type="text/javascript">
	function check(e){
		var p = e.value;
		if(p==='std'){
			document.getElementById('change').innerHTML = 'Enrollment No.';
		}
		else if (p==='teach') {
			document.getElementById('change').innerHTML = 'User';
		}
		else if(p==='admin'){
			document.getElementById('change').innerHTML = 'Unique TEXT';
		}
	}
</script>
</body>
</html>