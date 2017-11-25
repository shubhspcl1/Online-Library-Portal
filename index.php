<?php include 'db.php';
$id = $_SESSION['id'];
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Online Library Portal</title>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library --><!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">



<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
          

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style type="text/css">

section
{
  background:yellow;
}
.banner
{
  
  min-height:630px;
}
.banner .row
{
  text-align:center;
  margin-top:50px;
}
.banner h1
{
  color:white;
}
.header {
  position: relative;
    
}
.w3-button{
  background-color: green;
}
.w3-button:hover{
  background-color: red;
  color: ;
}



/***********************************************************************
*  OPAQUE NAVBAR SECTION
***********************************************************************/
.opaque-navbar {
    background-color: rgba(0,0,0,0.5);
  /* Transparent = rgba(0,0,0,0) / Translucent = (0,0,0,0.5)  */
    height: 60px;
    border-bottom: 0px;
    transition: background-color .5s ease 0s;
}

.opaque-navbar.opaque {
    background-color: black;
    height: 60px;
    transition: background-color .5s ease 0s;
}

ul.dropdown-menu {
    background-color: black;
}

h5{
  font-size: 15px;
}

@media (max-width: 992px) {
  body
  {
    background:red;
  }
  .opaque-navbar {
    background-color: black;
    height: 60px;
    transition: background-color .5s ease 0s;
}

}




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


<script type="text/javascript" charset="utf-8" async defer>
  
    // Toggle tranparent navbar when the user scrolls the page
$(document).ready(function(){

 if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
}
});


// Cache selectors
var topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   // Set/remove active class
   menuItems
     .parent().removeClass("active")
     .end().filter("[href='#"+id+"']").parent().addClass("active");
});​


</script>

<body data-spy="scroll">

  <div class="navbar navbar-inverse navbar-fixed-top opaque-navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMain">
  <span class="glyphicon glyphicon-chevron-right" style="color:white;"></span>
    
  </button>
      <a class="navbar-brand" href="#" style="color: white;"><span><img src="ilab.png" alt="" height="50px" ; width="50px" style="margin-left: -40%; margin-top: -10px;"><strong>ONLINE LIBRARY PORTAL</strong></a>
    </div>
    <div class="collapse navbar-collapse" id="navMain" data-aos="zoom-in-up">
      <ul class="nav navbar-nav navbar-left">
        <li class="" style="color: white; font-variant: small-caps; font-size: 118%"><a href="#">Home</a></li>
        <li><a href="http://localhost/about.php" style="color: white;  font-variant: small-caps;">About Us</a></li>
        <li><a href="#services" style="color: white;  font-variant: small-caps;">Services and Pricing</a></li> 
        <li><a href="#contact" style="color: white;  font-variant: small-caps;">Contact Us</a></li> 
        <ul class="nav navbar-nav navbar-right">
          <?php if(!$id){?>
      <li><a href="http://localhost/register.php" style="color: white;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="http://localhost/services.php" style="color: white;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php }else{ ?>
        <li><a href="http://localhost/logout.php" style="color: white;"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      <?php } ?>
    </ul>
      </ul>
    </div>
  </div>
</div>
<div>

  <video autoplay height="100%" width="100%" loop style="position: relative;z-index: 10;">
  <source src="lab1.mp4" type="video/mp4">
  <source src="library.ogg" type="video/ogg">
  
</video>
<div style="z-index: 20;position: relative;margin-left: -5%;text-shadow: 2px 2px white;
    margin-top: -20%;" data-aos="fade-right"
     data-aos-offset="100"
     data-aos-easing="ease-in-sine";>
<h3 style="color: black;margin-top: -20%;"><center>"GET BOOKS OF YOUR CHOICE EASILY <br>ON A SINGLE CLICK !'</center></h3>
<div style="margin-left: 40%;position: relative;z-index: 20;">

<div class="w3-container">
  
  
<!--<span><button class="w3-button w3-green" style="color: white;border-radius: 25px; width: 100px;
    height: 50px;background-color: green;
    border: 1px solid blue;">ISSUE</button></span>
  <span><button class="w3-button w3-green" style="color: white;border-radius: 25px; width: 100px;
    height: 50px;background-color: green;
    border: 1px solid blue; margin-left: 5%; margin-top: -5%;">MAGAZINE SERVICE</button></span>--><a href="/Instant" class="btn btn-hero" style="margin-right:15px;z-index:0; font-size: 25px;border:10px;margin-left: -135px"><strong>Single Order</strong> </a>
 <a href="order.html" class="btn btn-hero" style="margin-right:15px;z-index:0;font-size: 25px;"><strong> Monthly Service</strong> </a><br>
 
</div>

</div>  

</div>  

</div>



  </div>
  </div>
  </section>



    
  </div>
  </div>
  </div><br><br><br><br><br><br>
<section id="howitworks" style="background-color: white; >

            <div class="container" style="background-color: white;">
                <h1 style="margin:0; ;" class="center animation-item slide-bottom" style="margin-bottom:80px;margin-top:15px;"> How It Works?</h1>
                <br>
                <div class="row">
                    <div class="col-sm-4" > <img id="howitworks1" style="height:562px; width:600px;" src="lib2.jpg" class="animation-item slide-left" alt="how it works "> <img id="howitworks2" style="height:562px; width:600px;display:none;" src="lib2.jpg" class="animation-item slide-left" alt="how it works "> <img id="howitworks3" style="height:562px; width:600px;display:none;" src="lib2.jpg" class="animation-item slide-left" alt="how it works "> </div>
                    <div class="col-sm-6 col-sm-offset-2">
                        <div class="howitworks_button active_button animation-item slide-right" id="button_1"; data-aos="fade-down-left"">
                            <h1 style="text-shadow: 2px 2px rgb(0,162,232); font-style: oblique; ">LIBRARY</h3>
                            <p class="lead"> A Place Vibrating With Ideas</p>
                        </div>
                        <div class="howitworks_button animation-item slide-right" id="button_2" data-aos="flip-left">
                            <h1 style="text-shadow: 2px 2px rgb(0,162,232); font-style: oblique;">BOOKS</h1>
                            <p class="lead"> AT YOUR DOORSTEP @ JUST ONE CLICK  </p>
                        </div>
                        <div class="howitworks_button animation-item slide-right" id="button_3">
                            <h1 style="text-shadow: 2px 2px rgb(0,162,232); font-style: oblique; font-weight: 900%">DELIVERY</h1>
                            <p class="lead"> in low prices so that you can order daily </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>









<div class="parallax-container">
    <div class="parallax"> <h2>parallex effect</h2><img src="lab.jpg">
     <h2>parallex effect</h2>
    </div>
  </div>

  <br><br>

  <div class="container" id="services" style="background-color: grey; width: 150%; color: white;" data-aos="flip-left">
    <strong>
      <h4>General Conditions</h4>
      <ul>
        <li>All visitors are required to report to Reception with photo ID on arrival at IISS, in order to obtain a security pass. ID may be verified with the issuing agency.</li>
        <li >The IISS security pass must be presented at the Library enquiry desk when entering the Library.</li>
        <li>All users of the Library are required to sign in and out on arrival and departure </li>
        <li>Bags must be deposited in the cupboard provided </li>
      </ul>
      <h4>Borrowing Conditions</h4>
      <ul>
        <p>Members of the Institute may borrow up to five items for a three-week loan period. Items may be renewed for another two loan periods of three weeks each, provided that the items have not been requested by another user.</p>
        <p>Once an item has reached its renewal limit, it must be returned to the Library and may not be borrowed again by the same user until it has been back in the Library and available to other users for at least one week.</p>
        <p>t is the borrower's responsibility to ensure that items are returned to the Library on time; overdue fines will be charged on late returns or renewals (please see "Renewals and fines" below).

Persistent failure to adhere to the borrowing policy will result in the permanent withdrawal of borrowing privileges.

Non-members paying the daily fee may use the Library for reference but may not borrow items.

Certain publications such as IISS publications, Janes Yearbooks, SIPRI Yearbooks and all journals are for reference only.</p>
      </ul>
      <h4>Renewals and fines</h4>
      <ul>
        <li>Borrowed items must be returned or renewed by 5:00pm on the due date</li>
        <li>Renewals may be made in person, by telephone and by email during Library opening hours Alternatively renewals can be made via the Library catalogue; this requires a borrowing card number and a PIN. Please contact Library staff if a new PIN is required</li>
        <li>Items lost or damaged while on loan will be charged to the borrower at the full replacement cost, together with delivery charges where applicable, plus a £5.00 administrative fee</li>
        <li>Fines must be paid before further books are borrowed or existing loans renewed</li>
      </ul>
    </strong>
  </div>

 <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:1000px; margin-left: 40%;margin-top: -50px;position: relative;" ;  id="contact" data-aos="zoom-in-up">
    <span><img src="lb.jpg" height="100%" width="60%" style="margin-left: -500px; margin-top: 200px;"><span>
    <h2 class="w3-wide w3-center"  style="max-width:1000px; margin-left: 10%;margin-top: -450px;position: relative;" class="contact" >GET IN TOUCH</h2>
    <p class="w3-opacity w3-center"><i><h5>For any queries/feedback<br>Just drop a message</h5></i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin-left: -8px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="btn btn-success" type="submit">SEND</button>
        </form>
      </div>
    </div>
    <div><br><br><br><br>
<div data-aos="flip-left" style="margin-top: -5%" data-aos-duration="300"><!-- Footer -->
<footer class="text-center" style="margin-top: 100px; background-color: rgb(232, 34, 54);height: 0%; margin-left: -80%;">
  <a class="up-arrow" href="#top" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <h6>This Library portal is made by <a href="#" data-toggle="tooltip" title="Visit w3schools">Udbhav, Karishma , Shubham, Urvashi</a></h6> 
  <p>Copyright @ Library portal 2017</p>
</footer>

</div> 
</div>

  </div>
  



</body>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script>
   $(document).ready(function(){
      $('.parallax').parallax();
    });


    AOS.init();


</script>


</html>