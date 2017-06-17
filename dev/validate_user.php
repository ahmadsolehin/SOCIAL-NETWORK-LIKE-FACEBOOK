<?php
   
   include_once("php_includes/check_login_status.php");
	   //Start your session
   	session_start();
	if(!isset($_SESSION['username']))
	{
	header("Location: index.php");
	}

  
   //Read your session (if it is set)
   if (isset($_SESSION['fname']))
      $fn =  $_SESSION['fname'];
      $ln = $_SESSION['lname'];
      $u = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Grezzli</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Custom CSS files here -->


  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/header.css">
  <link href="css/agency.css" rel="stylesheet">
  <link href="chatbox/chatbox.css" rel="stylesheet">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <!-- Custom Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>



  <style media="screen">
    #navbar-main {
      min-width: 250px;
      padding: 14px 14px 0;
      overflow: hidden;
      background-image: -ms-radial-gradient(center, ellipse closest-side, #BDBDBD 0, #141413 200%);
      background-image: -moz-radial-gradient(center, ellipse closest-side, #BDBDBD 0, #141413 200%);
      background-image: -o-radial-gradient(center, ellipse closest-side, #BDBDBD 0, #141413 200%);
      background-image: -webkit-gradient(radial, center center, 0, center center, 125, color-stop(0, #BDBDBD), color-stop(200, #141413));
      background-image: -webkit-radial-gradient(center, ellipse closest-side, #BDBDBD 0, #141413 200%);
      background-image: radial-gradient(ellipse closest-side at center, #BDBDBD 0, #141413 200%);
      opacity: .9
    }

    body,
    html {
      height: 100%;
    }

    body {
      padding-top: 62px;
    }

    .full-background {
      width: 100%;
      height: 100%;
      height: calc(100% - 60%);
      background-image: url('https://c.stocksy.com/a/5HS100/z0/347019.jpg');
      background-size: cover;
    }

    .full-background img {
      width: 100%;
    }

    #profile-photo {
      width: 75%;
      height: 80%;
    }

    #badge-icon {
      width: 75%;
      height: 80%;
    }

    .panel-heading .accordion-toggle:after {
      /* symbol for "opening" panels */
      font-family: 'Glyphicons Halflings';
      /* essential for enabling glyphicon */
      content: "\e114";
      /* adjust as needed, taken from bootstrap.css */
      float: right;
      /* adjust as needed */
      color: grey;
      /* adjust as needed */
    }

    .panel-heading .accordion-toggle.collapsed:after {
      /* symbol for "collapsed" panels */
      content: "\e080";
      /* adjust as needed, taken from bootstrap.css */
    }
  </style>



</head>

<body id="page-top" class="index">

  <!--navigation bar-->

  <nav class="navbar navbar-default  navbar-fixed-top" role="navigation" id="navbar-main">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navCollapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="fa fa-chevron-down"></span> Menu
        </button>
        <a href="index.html">
          <img width="180" height="60" class="img-responsive" src="img/logo.png" alt="">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navCollapse">
        <div class="col-sm-4 col-md-4 col-sm-4 col-md-offset-2">
          <form class="navbar-form" role="search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" name="q">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
          </form>
        </div>
        <ul id="menulist" class="nav navbar-nav navbar-right">
          <li class=""><a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
          <li class=""><a href="#"><i class="glyphicon glyphicon-envelope"></i></a></li>
          <li class=""><a href="logout.php"><i class="glyphicon glyphicon-log-out">Logout</i></a></li>  
          <li class=""><a href="#"><i class="glyphicon glyphicon-user"></i> <?php echo $fn.' '.$ln; ?></a></li> 


      </div>
    </div>
  </nav>
  <!--row for cover photo  -->
  <div class="full-background">


  </div>
  </br>

  <div class="container">

    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-4">

        <div class="row">

          <div class="col-md-4 col-sm-4 col-xs-4">
            <a href="#" class="" data-toggle="">

              <img id="badge-icon" src="img/Badge-icon.png" class="img-responsive" alt="">
              <!-- <div class="col-md-2"><p><a id="popover" class="btn btn-popover" rel="popover" data-content="This badge indicates..." title="Choosing This Means:">
              <i class="fa fa-2x fa-info-circle"></i></a></p></div> -->
            </a>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-4">
            <a href="#" class="" data-toggle="">

              <img id="badge-icon" src="img/Badge-icon.png" class="img-responsive" alt="">
              <!-- <div class="col-md-2"><p><a id="popover" class="btn btn-popover" rel="popover" data-content="This badge indicates..." title="Choosing This Means:">
          <i class="fa fa-2x fa-info-circle"></i></a></p></div> -->
            </a>
          </div>

        </div>

      </div>

      <div class="col-md-3 col-sm-3 col-xs-3">


        <img id="profile-photo" style="margin-top:-5vmax" src="img/anl.jpg" class="img-responsive img-circle" alt="">
        <!-- <div class="col-md-2"><p><a id="popover" class="btn btn-popover" rel="popover" data-content="This badge indicates..." title="Choosing This Means:">
          <i class="fa fa-2x fa-info-circle"></i></a></p></div> -->

      </div>
      <div class="col-md-2 col-sm-2 col-xs-2">
        <a href="#" class="" data-toggle="">

          <img src="img/user_rating.png" class="img-responsive" alt="">
          <!-- <div class="col-md-2"><p><a id="popover" class="btn btn-popover" rel="popover" data-content="This badge indicates..." title="Choosing This Means:">
          <i class="fa fa-2x fa-info-circle"></i></a></p></div> -->
        </a>
      </div>

      <div class="col-md-1 col-sm-1 col-xs-1">

        <a href="#">
          <button style="font-size:1vmax" class="btn btn-primary" type="submit"><i style="color:green" class="glyphicon glyphicon-envelope"></i> </button>
        </a>
        <!-- <div class="col-md-2"><p><a id="popover" class="btn btn-popover" rel="popover" data-content="This badge indicates..." title="Choosing This Means:">
          <i class="fa fa-2x fa-info-circle"></i></a></p></div> -->

      </div>
      <div class="col-md-1 col-sm-1 col-xs-1">

        <a href="#">
          <button style="font-size:1vmax" class="btn btn-primary" type="submit"><i style="color:green" class="glyphicon glyphicon-plus"></i><i style="color:green" class="glyphicon glyphicon-user"></i></button>
        </a>
        <!-- <div class="col-md-2"><p><a id="popover" class="btn btn-popover" rel="popover" data-content="This badge indicates..." title="Choosing This Means:">
          <i class="fa fa-2x fa-info-circle"></i></a></p></div> -->

      </div>


    </div><!-- end of badge/photos section  -->
  </br>
    <div class="row">

      <div class="col-md-4 col-sm-4 col-xs-4 "></div>
      <div class="col-md-3 col-sm-4 col-xs-4 ">
        <a href="userprofile.html">
      <button  style="width:80%" class="btn btn-primary btn-block"> Show Services</button></a>
      </div>
      <div class="col-md-2">
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/loFtozxZG0s">VIDEO CV</a>


        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div>
                  <iframe width="100%" height="350" src=""></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div></br>

    
      <div class="container">

    <!-- Signup form -->
    <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-4">
    </div>


    <div class="col-md-4 col-sm-4 col-xs-4">
   
    <h3><p> For quick validation of your accounnt, provide the below information. </p></h3> <br>
    <!-- Multiple Radios -->

    </div>
    </div>
    <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-4">
    </div>


    <div class="col-md-4 col-sm-4 col-xs-4">
    <p> Do you have an account from ?</p>

    <form name="signup_individual_part_2" action="/bank_detail" id="signup_form_individual_part_2" role="form" method="post" >
    <!-- Error Message goes here if the email/username exist -->


      <div class="form-group">

        <div class="col-md-6">
        <div class="radio">
          <label for="eezy">
            <input type="radio" name="radios" id="eezy" value="1" >
            <a href="#" class="btn btn-block btn-primary" style="border:0px;background-color:white">
              <img  src="img/eezy-logo.jpg" class="img-responsive" alt="">
            </a>

          </label>
      	</div>
        <div class="radio">
          <label for="ukko">
            <input type="radio" name="radios" id="ukko" value="2" >
            <a href="#" class="btn btn-block btn-primary" style="border:0px;background-color:white">
              <img  src="img/ukko-logo.png" class="img-responsive" alt="">
            </a>

          </label>
      	</div>
        <div class="radio">
          <label for="No">
            <input type="radio" name="radios" id="No" value="2" checked="checked">

              <p>No


          </label>
      	</div>
        </div>
      </div>


    </form>

    </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-4">
      </div>


      <div class="col-md-4 col-sm-4 col-xs-4">
      <div class="form-group">
        <a id ="directpages" href="" >
        <button type="button" id="submitbut"  class="btn btn-primary btn-block" aria-label="Left Button">Submit</button>
      </a>
      </div>

    </div>

    </div>




    <!-- <% if(true){ %>
   <h1>foo</h1>
 <% } else{ %>
   <h1>bar</h1>
<% } %> -->
  </div>
 
  </br>


      </div>
      <!--  advertisement and top services section-->
      </br>


<!-- Footer -->
<footer class="footer-distributed">

  <div class="footer-left">

    <h3>
      <img width="180" height="60" class="img-responsive" src="img/logo.png" alt="">
      </a>
    </h3>

    <p class="footer-links">
      <a href="#">Home</a> &middot;
      <a href="#">Blog</a> &middot;
      <a href="#">About</a> &middot;
      <a href="#">Faq</a> &middot;
      <a href="#">Contact</a>
    </p>

    <p class="footer-company-name">Grezzli &copy; 2016</p>
  </div>

  <div class="footer-center">

    <div>
      <i class="fa fa-map-marker"></i>
      <p>
        <span>Skinnarilankatu</span> 53850 Lappeenranta, Finland</p>
    </div>

    <div>
      <i class="fa fa-phone"></i>
      <p>+358417289202</p>
    </div>

    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="mailto:support@company.com">grezzli.com</a></p>
    </div>

  </div>

  <div class="footer-right">

    <p class="footer-company-about">
      <span>About the company</span>
      Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
    </p>

    <div class="footer-icons">

      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-google-plus"></i></a>

    </div>

  </div>

</footer>





<!-- JS Files here -->
<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/agency.js"></script>


    <script>
      $(document).ready(function() {


        autoPlayYouTubeModal();
        //FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
        function autoPlayYouTubeModal() {
          var trigger = $("body").find('[data-toggle="modal"]');
          trigger.click(function() {
            var theModal = $(this).data("target"),
              videoSRC = $(this).attr("data-theVideo"),
              videoSRCauto = videoSRC + "?autoplay=1";
            $(theModal + ' iframe').attr('src', videoSRCauto);
            $(theModal + ' button.close').click(function() {
              $(theModal + ' iframe').attr('src', videoSRC);
            });
          });
        }

      });
    </script>
   

 <script>
  $(document).ready(function(){
    $('#submitbut').click(function() {
      if(document.getElementById("eezy").checked) {
        $('#directpages').attr('href',"http://www.eezy.fi/");
        // document.getElementById("signup_form_individual_part_2").submit();
      }else if(document.getElementById('ukko').checked) {
        $('#directpages').attr('href',"ukkodetails_user.php");
        // document.getElementById("signup_form_individual_part_2").submit();
      }else{
        $('#directpages').attr('href',"bankdetails_user.php");
        // document.getElementById("signup_form_individual_part_2").submit();
      }
    });
  });

  </script>




</body>

</html>
