<?php

$db_conx = mysqli_connect("localhost", "grezzejn", "kEb!wkP+wNs64x", "grezzejn_social_a");
// Check the connection
if (mysqli_connect_errno()) {
  echo mysqli_connect_error();
  exit();
} else {
  //echo "Successful database connection";
}



$services="SELECT Service_name, Service_category, Price, Service_description, Service_pic FROM service ";
$service = mysqli_query($db_conx, $services);




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


  <style type="text/css"> 

  #divResult
  {
    position:fixed;
    width:275px;
    display:none;
    margin-top:-1px;
    border-top:0px;
    overflow:hidden;
    border-bottom-right-radius: 6px;
    border-bottom-left-radius: 6px;
    -moz-border-bottom-right-radius: 6px;
    -moz-border-bottom-left-radius: 6px;
    box-shadow: 0px 0px 5px #999;
    border-width: 3px 1px 1px;
    background-color: white;
  }
  .display_box
  {
    border-top:solid 1px #dedede; 
    font-size:12px; 
    height:50px;
  }
  .display_box:hover
  {
    background:#fed136;
    color:#FFFFFF;
    cursor:pointer;
  }
  </style>



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
  </style>

    <style media="screen">
    @import url('http://fonts.googleapis.com/css?family=Oswald');


    #video-background {


      z-index: -100;
    }

    article {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      margin: 10px;
    }

    #vidh {
      position: absolute;
      top: 60%;
      width: 100%;
      font-size: 2vmax;
      letter-spacing: 3px;
      color: #fff;
      font-family: Oswald, sans-serif;
      text-align: center;
    }

    .bt-login,.bt-login:hover, .bt-login:active, .bt-login:focus {
      background-color: #ff8627;
      color: #ffffff;
      padding-bottom: 10px;
      padding-top: 10px;
      transition: background-color 300ms linear 0s;
    }


    .login-tab {
     margin: 0 auto;
     width: 90%;
   }

   .login-modal-header {
     background: #27ae60;
     color: #fff;
   }

   .login-modal-header .modal-title {
     color: #fff;
   }

   .login-modal-header .close {
     color: #fff;
   }

   .login-modal i {
     color: #000;
   }

   .login-modal form {
     max-width: 340px;
   }

   .tab-pane form {
     margin: 0 auto;
   }
   .login-modal-footer{
     margin-top:15px;
     margin-bottom:15px;
   }

   /*hoover effects*/
   .custom_hoover1:hover {
    border-radius:50%;
    box-shadow: 0 10px 6px -6px grey;
    -webkit-transform:scale(1.1);
    transform:scale(1.1);
  }
  .custom_hoover1 {
    -webkit-transition: all 0.7s ease;
    transition: all 0.7s ease;
  }

  .custom_hoover2:hover {
    -webkit-box-shadow: 0px 0px 15px 15px #fff;
    /*box-shadow: 0px 0px 15px 15px #fff;*/
    box-shadow: 0px 0px 15px 10px #00FF00;
    border-radius:50%;
    opacity: 1;
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);

  }
  .custom_hoover2 {
    opacity: 1;
    -webkit-transition: all 0.7s ease;
    transition: all 0.7s ease;
  }

  /*parallax effect*/
  .parallax_custom{
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  /* caption of categories*/
  .thumbnail {
    position:relative;
    overflow:hidden;
  }

  .caption {
    position:absolute;
    top:0;
    right:0;
    background:rgba(66, 139, 202, 0.75);
    width:100%;
    height:100%;
    padding:2%;
    display: none;
    text-align:center;
    color:#fff !important;
    z-index:2;
  }



  @media screen and (max-width: 480px) {
    #menulist{
      min-width: 250px;
      padding: 14px 14px 0;
      overflow:hidden;
      background-image: -ms-radial-gradient(center, ellipse closest-side, #BDBDBD 0, #141413 200%);
      background-image: -moz-radial-gradient(center, ellipse closest-side, #BDBDBD 0, #141413 200%);
      background-image: -o-radial-gradient(center, ellipse closest-side, #BDBDBD 0, #141413 200%);
      background-image: -webkit-gradient(radial, center center, 0, center center, 125, color-stop(0, #BDBDBD), color-stop(200, #141413));
      background-image: -webkit-radial-gradient(center, ellipse closest-side, #BDBDBD 0, #141413 200%);
      background-image: radial-gradient(ellipse closest-side at center, #BDBDBD 0, #141413 200%);
      opacity: .9
    }
  }
</style>

</head>



<body id="page-top" class="index">

  <!--navigation bar-->
  <nav class="navbar navbar-default transparent navbar-fixed-top" role="navigation" id="navbar-main">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navCollapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="fa fa-chevron-down"></span> Menu
        </button>
        <a href="index.php">
          <img width="180" height="60" class="img-responsive" src="img/logo.png" alt="">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="navCollapse">
        <div class="col-sm-4 col-md-4 col-sm-4 col-md-offset-2">
        <form class="navbar-form" role="search"  autocomplete = "off">
            <div class="input-group">
              <input type="text" class="form-control" id = "keepseacrh" placeholder="Search" name="q">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
          </form>

          <div id="divResult">
          </div>


        </div>
        <ul id="menulist" class="nav navbar-nav navbar-right">
          <li class=""><a href="howitworks.html"><i class="glyphicon glyphicon-question-sign"></i> How It Works</a></li>
          <!-- <li class=""><a href="#"><i class="glyphicon glyphicon-pencil"></i> Sign Up</a></li> -->
          <li class=""><a  href="login.php" ><i class="glyphicon glyphicon-log-in"></i> Login</a></li>
          <li class=""><a  href="javascript:;" data-toggle="modal" data-target="#loginModal"><i class="glyphicon glyphicon-log-in"></i> REGISTER</a></li>
        </ul>



      </div>
    </div>
  </nav>








    <!-- -Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content login-modal">
        <div class="modal-header login-modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title text-center" id="loginModalLabel">USER REGISTRATION</h4>
        </div>
        <div class="modal-body">
          <div class="text-center">
            <div role="tabpanel" class="login-tab">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"  class="active"><a id="signup-taba" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sign Up</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="profile">
                  <div class ="row">
                  </br>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <a href="service_seeker_reg.php" class="btn btn-block btn-primary"><p style="font-size:12.6px">Service Seeker</p></a>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <a href="service_provider_reg.php" class="btn btn-block btn-primary"><p style="font-size:12.6px">Service Provider</p></a>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <a href="company_reg.php" class="btn btn-block btn-primary"><p style="font-size:12.6px">Company</p></a>
                  </div>
                </div>

              </div>




            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>
<!-- - Login Model Ends Here -->


</br>

<div class="container">

  <div class="row">


  </div></br>

  

  <!--  service container-->
  <!-- Info about  user  -->
  <div class="col-md-3 col-sm-3 col-xs-3">

    <div class="row">


    </div>

    </br>


  </div>

  <div class="col-md-6 col-sm-6 col-xs-6">
    <div class "row">
    </div>

    <div class="row">


      <?php  
      while ($row = mysqli_fetch_array($service, MYSQLI_ASSOC)) {
        $sn= $row["Service_name"];
        $sc= $row["Service_category"];
        $p= $row["Price"];
        $sd= $row["Service_description"];
        $Service_pic = $row["Service_pic"];


        ?>

        <div class="col-md-6 col-sm-6 col-xs-6">

          <div class="panel panel-default">          
            <div class="panel-heading">
              <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-4">
                  <img src="img/user_rating.png" class="img-responsive" alt="">
                </div>

                <div class = "row">
                  <div class="col-md-6 col-sm-8 col-xs-8 ">
                    <p><?php echo $sn; ?></p>
                  </div>
                </div>

              </div>

            </div>
            <div class="panel-body">
              <a href=" ">
                <img src="<?php echo $Service_pic; ?>" class="img-responsive" alt="">
              </a>
            </div>

            <div class="panel-footer">
              <a style="color:black" href=" ">
                <div class="row">
                  <div class="col-md-8 col-sm-8 col-xs-8">
                    <p> <?php echo $sc; ?></p>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <p><?php echo $p; ?><i class="glyphicon glyphicon-eur"></i></p>
                  </div>
                </div>
              </a>

            </div>
          </div>
        </div>
        <?php    } ?>



      </div>



    </div>



</div>

</div></br>

<input type = "hidden" value = "<?php echo $position; ?>" id = "positionimage">



<!-- Footer -->
<!-- Footer -->
<div>
 <?php include_once("footer.php"); ?>
</div>
<!-- JS Files here -->


<!-- JS Files here -->
<script src="https://code.jquery.com/jquery-2.2.2.min.js" integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>
<script src="js/agency.js"></script>
<script src="chatbox/chatbox.js"></script>
<script src="js/aos.js"></script>
  </body>

  </html>




  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript">


    $(document).ready(function() {

      $('#keepseacrh').keyup(function() {


        var inputSearch = $(this).val();
        var dataString = 'searchword='+ inputSearch;

        if(inputSearch!='')
        {
          $.ajax({
            type: "POST",
            url: "searchforServiceonly.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
              $("#divResult").html(html).show();
            }
          });
        }

        if(inputSearch == ''){
          $("#divResult").empty();

        } 


      });
    });


  </script>











    <!-- -Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content login-modal">
        <div class="modal-header login-modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title text-center" id="loginModalLabel">USER REGISTRATION</h4>
        </div>
        <div class="modal-body">
          <div class="text-center">
            <div role="tabpanel" class="login-tab">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation"  class="active"><a id="signup-taba" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sign Up</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="profile">
                  <div class ="row">

                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <a href="service_seeker_reg.php" class="btn btn-block btn-primary"><p style="font-size:1vmax">Service Seeker</p></a>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <a href="service_provider_reg.php" class="btn btn-block btn-primary"><p style="font-size:1vmax">Service Provider</p></a>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4">
                    <a href="company_reg.php" class="btn btn-block btn-primary"><p style="font-size:1vmax">Company</p></a>
                  </div>

                </div>

              </div>




            </div>
          </div>  <!-- tabpanel -->

        </div>    <!-- text center -->
      </div>      <!-- modal body -->

    </div>         <!-- modal content -->
  </div>           <!-- modal dialog -->
</div>               <!-- modal fade -->
