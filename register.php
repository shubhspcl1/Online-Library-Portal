<?php include 'db.php'; ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Register</title>
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
        <li class="active">
          <a href="services.php">Services</a>
        </li>
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

  <div class="container">
        <form method="post" action="signup.php">
		          <h4 class="center title">Sign Up</h4>
				   <br><br>
        <div class="row" style="margin-left:30%">

                    <div class="input-field col s8">
            <i class="material-icons prefix">account_circle</i>
            <input placeholder="Enter Email" required name="username" id="username" type="email" class="validate" onchange="removeSpace()" onkeypress="removeSpace()" value="">
            <label for="username">Email</label>
          </div>
		  <br><br><br><br><br>
          <div class="input-field col s8">
            <i class="material-icons prefix">account_circle</i>
            <input placeholder="Enter Name" required name="name" id="name" type="text" class="validate">
            <label for="name">Name</label>
          </div><br><br><br><br><br>
          <div class="input-field col s8">
            <i class="material-icons prefix">vpn_key</i>
            <input placeholder="Enter Password" required name="password" id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
		  <br><br><br><br><br>
          <div class="input-field col s8">
            <i class="material-icons prefix">vpn_key</i>
            <input placeholder="Confirm Password" required name="passwordConf" id="passwordConf" type="password" class="validate" 
			    onchange="checkPassword()">
            <label for="passwordConf">Confirm Password</label>
          </div>
		  <br><br><br><br><br>
          <div class="input-field col s8">
            <i class="material-icons prefix">phone</i>
            <input placeholder="Contact Number" required name="contact" id="contact" type="text" class="validate" value="">
            <label for="contact">Contact Number</label>
          </div>
		  <br><br><br><br><br>
          <div class="input-field col s8">
            <i class="material-icons prefix">location_city</i>
            <input placeholder="City Name" required name="city"  type="text" class="validate"  value="">
            <label for="contact">Enter City Name</label>
          </div>
		  
		  <input type="hidden" name="instant" value="0"><div class="input-field col l12 s12 m12 center">
            <button class="btn waves-effect waves-light" type="submit" name="register">Sign Up
              <i class="material-icons right">send</i>
            </button>
          </div><br>
          <div class="input-field col l12 m12 s12 center">
            <a href="services.php" class="btn-flat">Registered User ? Click to Login
              <i class="material-icons right">input</i>
            </a>
          </div>
        </div>
        </form>  
      </div>
      </div>
      </body>
</html>