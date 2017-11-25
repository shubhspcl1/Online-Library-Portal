<?php include 'db.php'; 
$id = $_SESSION['id'];
$cat = $_GET['cat'];
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Books</title>
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
      <a class="navbar-brand" href="http://localhost/">Online Library Portal</a>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="http://localhost">Home</a>
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
          <a href="http://localhost/report.php">Report a Problem!</a>
        </li>
        <li>
          <a href="home.php">Profile</a>
        </li>
        <li>
          <a href="http://localhost/about.php">About us</a>
        </li>
      </ul>
    </div>
  </nav>






<ul id="nav-mobile" class="side-nav no-transform-css fixed" style="color:#279E9A;">
          <form action="search.php" method="post">
                  <div class="input-field"  data-step="7" data-intro="If customer forgets his/her customerid you can also see customer details from his/her mobile number" data-position='right'>
                    <input id="search" type="search" name="number" required style="width:70%;margin-left:10%;" placeholder="Search and hit ENTER!">
                    <label for="search"></label>
                    
                  </div>
                </form>
          <li class="item"><a id="Click1" href="http://localhost/books.php/?cat=art" data-step="1" data-intro="Art books will be presented upon click!" data-position="right" >Art</a></li>

                <li class="item"><a id="Click2" href="http://localhost/books.php/?cat=sci" data-step="1" data-intro="Sci-Fi books will be presented upon click!" data-position="right"> Sci-Fi</a></li>
			<li class="item"><a id="Click3" href="http://localhost/books.php/?cat=fantasy" data-step="3" data-intro="Fantasy books will be presented upon click!" data-position='right'>Fantasy</a></li>
          
          
          <li class="item"><a id="Click2" href="http://localhost/books.php/?cat=biographhy" data-step="2" data-intro="Biography books will be presented upon click!" data-position='right'>Biographies</a></li>
          
          <li class="item"><a id="Click4" href="http://localhost/books.php/?cat=history" data-step="4" data-intro="History books will be presented upon click!" data-position='right'>History</a></li>
          <li class="item"><a id="Click4" href="http://localhost/books.php/?cat=religion" data-step="5" data-intro="Religion books will be presented upon click!" data-position='right'>Religion</a></li>
          <li class="item"><a id="Click4" href="http://localhost/books.php/?cat=mystery" data-step="6" data-intro="Mystery books will be presented upon click!" data-position='right'>Mysteries</a></li>
         
 <li class="item"><a id="Click5" href="http://localhost/books.php/?cat=music" data-step="6" data-intro="Music books will be presented upon click!" data-position='right'>Music</a></li>
              

        </ul>

    			<ul><br><br><br><br><br>
	      	<?php 
	      		$sql = "Select * from books where category = '$cat'";
	      		$res = mysqli_query($con, $sql);
	      		while($r = mysqli_fetch_array($res)){
	      	 ?>
	      	<li style="float:left;margin-left:18%;">
        <div class="row panel" style="margin-left:25%;">
			
     			<div class="row">
        <div class="col s12 m7" style="width:300px;">
          <div class="card">
            <div class="card-image">
            	<img src="http://localhost/images/<?php echo $r['img']; ?>.jpg" style="height:300px;">
              <span class="card-title"><?php echo $r['name']; ?></span>
            </div>
            
            <div class="card-action">
              <a href="http://localhost/issue.php/?bid=<?php echo $r['id']; ?>">Issue</a>
            </div>
          </div>
        </div>
      </div></div><br><br><br></li>
      
      <?php }?>


</ul>









    </body>


    </html>