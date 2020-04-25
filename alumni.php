<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TC Download</title>
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">





</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll"><a href="index.html">Home</a></li>
                                      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">School
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">About School</a></li>
    <li><a href="#">Facilities</a></li>
    <li><a href="#">Principal Desk</a></li>
    <li><a href="#">Management</a></li>
    <li><a  href="#">Academics & Courses</a></li>
    <li><a  href="#">Faculties</a></li>
        </ul>
      </li>  
                  <li class="scroll"><a href="#">News</a></li>
                        <li class="scroll"><a href="#">Gallery</a></li>
                        <li class="scroll"><a href="tc_download.php">TC Download</a></li> 
                        <li class="scroll"><a href="#">Admission</a></li>  
                        <li class="scroll active"><a href="#">Alumni</a></li> 
                             
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="features">
        <div class="container" >
            <div class="section-header">
                <h2 class=" section-title text-center wow fadeInDown" style="text-align: center;"> Alumni Join Form</h2>
            </div>
            <br>
            <br>
            <!--  -->
            <div class="container">
  <form class="form-horizontal" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2">Name:</label>
      <div class="col-sm-4">
        <input type="text"  class="form-control" placeholder="Enter Name" name="alumni_name" required>
      </div>
      <label class="control-label col-sm-2">Pass Out Year:</label>
      <div class="col-sm-4">
        <input type="number"  class="form-control" id="email" placeholder="Enter Year Of Pass Out " name="pass_year" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Email:</label>
      <div class="col-sm-4">
        <input type="email"  class="form-control"  placeholder="Enter email" name="email">
      </div>
   
      <label class="control-label col-sm-2" >Job:</label>
      <div class="col-sm-4">
        <input type="text"  class="form-control" placeholder="Enter your Current Job" name="job">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Father/Guardian:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" placeholder="Father/Guardian" name="email" required>
      </div>
    
      <label class="control-label col-sm-2">Addess:</label>
      <div class="col-sm-4">
        <input type="text"  class="form-control" id="email" placeholder="Enter your Addess" name="email" required>
      </div>
    </div>
   <div class="form-group">
      <label class="control-label col-sm-2">Place:</label>
      <div class="col-sm-4">
        <input type="text"  class="form-control" placeholder="Enter your Place" name="place" required>
      </div>
      <label class="control-label col-sm-2" for="email">Mobile Number:</label>
      <div class="col-sm-4">
        <input name="mobile" pattern="[0-9]{10}" placeholder="Mobile" type="text" required class="form-control"  required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">WhatsApp Number:</label>
      <div class="col-sm-4">
        <input pattern="[0-9]{10}"  type="text"  class="form-control"  placeholder="WhatsApp Number" name="whatsapp">
      </div>
            
      <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-info form-control">Join</button>
        <label style="color: red;text-align: center;">* All Are Mandtory</label>
      </div>
    </div>
  </form>
</div>

        <?php
        include("config.php");
       if($_POST)
       {
   $name=$_POST['alumni_name'];
   $pass=$_POST['pass_year'];
   $email=$_POST['email'];
   $job=$_POST['job'];
   $father=$_POST['father'];
   $address=$_POST['address'];
   $mobile=$_POST['mobile'];
   $whatsapp=$_POST['whatsapp'];
$qry1="INSERT INTO `alumni`(`name`,`pass_year`,`email`,`job`,`father`,`address`,`mobile`,`whatsapp`) VALUES('$name','$pass','$email','$job','$father','$address','$mobile','$whatsapp')";
    $done1=mysqli_query($con,$qry1)or die("Could not Connect My Sqli_DB");
    if($done1)
    {

   ?>
    <div class="alert alert-success">
  <strong>Success!</strong>you are joined
</div>
                <?php
              }
              else
              {
                ?>
    <div class="alert alert-danger">
  <strong>Error!</strong> try again.
</div><?php
       }
   }
        ?>
    

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>GREATE</span> CAMPUS FOR GREATE STUDY</h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">Innovation in education, Excellence in teaching <br />its call AES Central School, Alloor</p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#">Quick View</a></p>
                <img class="img-responsive wow fadeIn" src="images/cta2/cta2-img.png" alt="" data-wow-duration="300ms" data-wow-delay="300ms">
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    Developed by <a target="_blank" href="http://xeobrain.com/">Xeobrain</a>
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons"> Affliated to CBSE, Affliation No. 930475/04    
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>