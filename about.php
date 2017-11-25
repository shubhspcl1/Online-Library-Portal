<?php include 'db.php';
$id = $_SESSION['id'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>About || </title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<style type="text/css">
	.about{
		width: 20%;
		float: left;
		-webkit-transition: all .3s ease-out;
		-moz-transition: all .3s ease-out;
		-o-transition: all .3s ease-out;
		transition: all .3s ease-out;
	}
	.about:hover{
		text-decoration: none;
		transform: scale(1.3,1.3);
		-webkit-transform: scale(1.3,1.3);
		-o-transform: scale(1.3,1.3);
		-moz-transform: scale(1.3,1.3);
	}
	.headlinks:hover{
		text-decoration: none;
	}
	h5{
		text-align: center;
	}
</style>
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
					<a href="report.php">Report a Problem!</a>
				</li>
				<li>
          <a href="home.php">Profile</a>
        </li>
				<li class="active">
					<a href="about.php">About us</a>
				</li>
			</ul>
		</div>
	</nav>

<div class="container"><br><br><br><br><br><br><br>
	<div style="" class="about">
		<span><a href="https://www.facebook.com/karishma.agarwal.3994" class="headlinks">
			<h3>Karishma Agawal</h3><hr>
			<img src="images/karishma.jpg" alt="Karishma" class="img-responsive img-circle"><hr></a>
			<h5>Coding-Enthusiast, Keen-observer, Honest and has a respect towards others.<br>She Knows how to deal with a problematic situation using wits.</h5>
		</span>
	</div>
	<div style="margin-left: 5%;" class="about">
		<span><a href="https://www.faceboook.com/ngudbhav" class="headlinks">
			<h3>Udbhav Gambhir</h3><hr>
			<img src="images/udbhav.jpg" alt="Udbhav" class="img-responsive img-circle"><hr></a>
			<h5>Web developer, Keen-Observer, Loyal towards others.<br>He is the owner of the site <a href="http://www.ngudbhav.me">NGUdbhav</a>, his Portfolio.</h5>
		</span>
	</div>
	<div style="margin-left: 5%;" class="about">
		<span><a href="https://www.facebook.com/profile.php?id=100017456348744" class="headlinks">
			<h3>Urvashi Singh</h3><hr>
			<img src="images/urvashi.jpg" alt="Urvashi" class="img-circle img-responsive"><hr></a>
			<h5>Always smiling, Responsible, Generous and Kind towards others.<br>She is the one who likes to accept challenge.</h5>
		</span>
	</div>
	<div style="margin-left: 5%;" class="about">
		<span><a href="https://www.facebook.com/shubham.shukla.5602728" class="headlinks">
			<h3>Shubham Shukla</h3><hr>
			<img src="images/shubham.jpg" alt="Shubham" class="img-responsive img-circle"><hr></a>
			<h5>Silent, Humourous and a very kind-hearted person.<br>He is the one who is in the contact list of nearly every JIITian.</h5>
		</span>
	</div>
</div>
</body>
</html>