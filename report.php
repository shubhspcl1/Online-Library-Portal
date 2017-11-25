<!DOCTYPE html>
<html>
<head>
	<title>Report || </title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body style="background-image: url('http://localhost/images/book.jpg'); height: 70%;">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Online Library Portal</a>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="services.php">Services</a>
				</li>
				<li class="active">
					<a href="report.php">Report a Problem!</a>
				</li>
				<li>
					<a href="about.php">About us</a>
				</li>
			</ul>
		</div>
	</nav>
<div class="container" style="float: left;width: 40%;background-color: transparent;color: black;margin-left: 30%;margin-top: 8%; ">
	<form style="padding: 4%;">
		<h3>
			Feedback form<hr>
		</h3>
		<label>
			Name:
		</label>
		<input type="text" name="fname" class="form-control" required>
		<label>
			Email:
		</label>
		<input type="email" name="femail" class="form-control" required>
		<label>
			Message:
		</label>
		<textarea cols="40" rows="3" class="form-control" style="resize: none;">
			
		</textarea><br>
		<input type="submit" value="Submit" class="btn btn-default">
	</form><hr>
	<h4 style="color: black;">
		Please be patient! This process takes some time due to SMTP limitations of Mail providers.
	</h4>
</div>
</body>
</html>