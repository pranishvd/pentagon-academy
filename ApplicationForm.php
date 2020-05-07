<?php 
include("config.php");
?>
<!DOCTYPE html>
<html lang="en" style="background-color: #fff">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pentagon academy </title>
    <!-- core CSS -->
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/font-awesome.min.css" rel="stylesheet">
    <link href="css1/animate.min.css" rel="stylesheet">
    <link href="css1/owl.carousel.css" rel="stylesheet">
    <link href="css1/owl.transitions.css" rel="stylesheet">
    <link href="css1/prettyPhoto.css" rel="stylesheet">
    <link href="css1/main.css" rel="stylesheet">
    <link href="css1/responsive.css" rel="stylesheet">


   <!-- main styles -->


    <!-- favicon
    ============================================ -->    
        <link rel="shortcut icon" type="image/x-icon" href="img/photo.jpg">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    
    <!-- Google Fonts
    ============================================ -->    
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>
        <!-- <script src="https://kit.fontawesome.com/34a3670202.js" crossorigin="anonymous"></script> -->
     
    <!-- Bootstrap CSS
    ============================================ -->    
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/grid.css">
        
    <!-- Fontawsome CSS
    ============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
    <!-- Owl Carousel CSS
    ============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        
    <!-- jquery-ui CSS
    ============================================ -->
        <link rel="stylesheet" href="css/jquery-ui.css">
        
    <!-- Meanmenu CSS
    ============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        
    <!-- Animate CSS
    ============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        
    <!-- Animated Headlines CSS
    ============================================ -->
        <link rel="stylesheet" href="css/animated-headlines.css">
        
        <!-- Nivo slider CSS
    ============================================ -->
    <link rel="stylesheet" href="lib/nivo-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="lib/nivo-slider/css/preview.css" type="text/css" media="screen" />
        
    <!-- Metarial Iconic Font CSS
    ============================================ -->
        <link rel="stylesheet" href="css/material-design-iconic-font.css">
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        
    <!-- Slick CSS
    ============================================ -->
        <link rel="stylesheet" href="css/slick.css">
        
    <!-- Video CSS
    ============================================ -->
        <link rel="stylesheet" href="css/jquery.mb.YTPlayer.css">
        
    <!-- Style CSS
    ============================================ -->
        <link rel="stylesheet" href="style.css">
        
    <!-- Color CSS
    ============================================ -->
        <link rel="stylesheet" href="css/color.css">
        
    <!-- Responsive CSS
    ============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        
    <!-- Modernizr JS
    ============================================ -->    
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>




    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/photo.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/photo.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/photo.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/photo.jpg">
    <link rel="apple-touch-icon-precomposed" href="images/photo.jpg">
    
    
</head>

<body>
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html" ><h2 id="logo_pent" style="color:#0099e6;text-transform: uppercase;"><span style="color: #0099e6;">Pentagon Academy</h2></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll"><a href="index.php">Home</a></li>
                                      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">About us
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
     <li class="scroll"><a href="index.php#about">Pentagon Academy</a></li>     
    <li><a href="index.php#core-value">Core Values</a></li>
        </ul>
      </li>  
       <li class="scroll"><a href="#">Gallery</a></li>
                                            <li class="dropdown active">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Students Portal
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
     <li><a href="#">Online Examination</a></li>
     <li class="scroll"><a href="result.php">Results</a></li>     
       <li class="scroll"><a href="studymaterials.php">Study Materials</a></li>    
        </ul>
      </li>            <li class="scroll"><a href="#">Courses</a></li>
                        <li class="scroll"><a href="#">Application Form</a></li>
                        <li class="scroll"><a href="index.html#meet-team">Team</a></li>  
                        <li class="scroll"><a href="#">Careers</a></li> 
                             
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->

    <h1 style="margin-top: 100px">Application Form</h1>

    <div class="container" style="margin-top: 10px;">

 
<?php 
if($_POST)
{
  $student_name = $_POST['student_name'];
  $school_name = $_POST['school_name'];
  $name_of_father = $_POST['name_of_father'];
  $contact_number = $_POST['contact_number'];
  $dob = $_POST['dob'];
  $class_name = $_POST['class_name'];
  $occupation_of_father = $_POST['occupation_of_father'];
  $batch = $_POST['batch'];
  if (isset($_POST['subjects']))
  {
  $subjects = implode(', ', $_POST['subjects']);
  }
  else
  {
    $subjects = "";
  }
  $nationality = $_POST['nationality'];
  $house_name = $_POST['house_name'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $place = $_POST['place'];
  $post = $_POST['post'];
  $pin = $_POST['pin'];
  $parent_mobile = $_POST['parent_mobile'];
  $parent_office = $_POST['parent_office'];
 
  $qr="INSERT INTO `application_form`(`student_name`, `school_name`, `contact_name`, `dob`, `class_name`, `occupation_of_father`, `batch`, `subjects`, `nationality`, `house_name`, `gender`, `address`, `place`, `post`, `pin`, `parent_mobile`, `parent_office`, `name_of_father`) VALUES('$student_name','$school_name', '$contact_number', '$dob', '$class_name', '$occupation_of_father', '$batch', '$subjects', '$nationality', '$house_name','$gender', '$address','$place','$post','$pin','$parent_mobile','$parent_office','$name_of_father')";
  $ex=mysqli_query($con,$qr) or die(mysqli_error($con));
  
  if($ex)
  {
  ?>
    <div class="alert alert-success">
      <strong>Success!</strong>The application was submited
    </div>
<?php
}
else
{
?>
    <div class="alert alert-danger">
        <strong>Error!</strong> try again.
    </div>
<?php
}
}
?>

</div>

 <div class="container" style="padding: 20px;">

    <div class="row">
        <div class="col-md-6">
    <form class="form" method="post">
        <div class="form-group">
            <label for="exampleInputName2" >Name of the Student</label>
            <input type="text" class="form-control" name="student_name" id="exampleInputName2" placeholder="Your Name" required>

        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">Father's Name</label>
                <input type="text" class="form-control" name="name_of_father" id="exampleInputEmail2" placeholder="Father's Name" required>            
        </div>
        <div class="form-group">
            <label for="exampleInputName2">Date of Birth</label>
                <input type="text" name="dob" class="form-control" id="exampleInputName2" placeholder="Day/Month/Year" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">Occupation of Father</label>
            <input type="text" name="occupation_of_father" class="form-control" id="exampleInputEmail2" placeholder="Occupation of Father">
        </div>
        <div class="form-group">
            <label for="exampleInputName2">Nationality</label>
            <input type="text" name="nationality" class="form-control" id="exampleInputName2" placeholder="Nationality">
        </div>
        <div >
            <label class="checkbox-inline" style="margin-top: 20px">
            <input type="radio" checked name="gender" value="Male"> Male
            </label>
            <label class="checkbox-inline" style="margin-top: 20px">
            <input type="radio" name="gender" value="Female"> Female
            </label>
        </div>
        <div class="form-group">
            <label for="exampleInputName2">Address</label>
            <textarea type="text" name="address" class="form-control" id="exampleInputName2" cols="10" placeholder="Address">  </textarea>
        </div>
        <div class="form-group ">
            <label for="exampleInputName2">Parent's Numbers</label>
            <input type="text" class="form-control col-xs-4" placeholder="Mobile" required name="parent_mobile">
                <div style="padding: 20px 0px;"></div>
                <input type="text" class="form-control col-xs-4" name="parent_office" placeholder="Office" style="margin-top: 10px">
        </div>
        </div>     
        <!-- </form> -->
<div class="col-md-6">
            <!-- <form> -->

    <div class="form-group">
    <label for="exampleInputEmail1" >Name of School Studying</label>
    <input type="text" class="form-control" name="school_name" required placeholder="Name of School Studying">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contact Number</label>
    <input type="text" class="form-control" name="contact_number" required placeholder="Contact Number">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Class</label>
    <input type="text" class="form-control" name="class_name" required placeholder="Class">
  </div>
    <div class="form-group">
        <label for="exampleInputFile">Batch</label>
        <div class="form-group">
            <label class="checkbox-inline" style="margin-top: 12px">
            <input type="radio" value="Morning" name="batch" checked> Morning
            </label>
            <label class="checkbox-inline" style="margin-top: 12px">
            <input type="radio"  value="Evening" name="batch"> Evening
            </label>
            <label class="checkbox-inline" style="margin-top: 12px">
            <input type="radio" name="batch" value="Holiday"> Holiday
            </label>
            <label class="checkbox-inline" style="margin-top: 12px">
            <input type="radio" name="batch" value="Indivitual"> Indivitual
            </label>                        
  </div>
  </div>

    <div class="form-group">
        <label for="exampleInputFile">Subjects</label>
        <div class="form-group">
            <label class="checkbox-inline" style="margin-top: 12px">
            <input type="checkbox" value="All subjects" name="subjects[]"> All subjects
            </label>
            <label class="checkbox-inline" style="margin-top: 12px">
            <input type="checkbox"  value="Accountancy" name="subjects[]"> Accountancy
            </label>
            <label class="checkbox-inline" style="margin-top: 12px">
            <input type="checkbox" name="subjects[]" value="Business Studies"> Business Studies
            </label>
            <label class="checkbox-inline" style="margin-top: 12px">
            <input type="checkbox" name="subjects[]" value="Ecnomics"> Ecnomics
            </label>                        
            <label class="checkbox-inline" style="margin-top: 12px">
            <input type="checkbox"  value="Computer Applications" name="subjects[]"> Computer Applications
            </label>
            <label class="checkbox-inline" style="margin-top: 12px">
            <input type="checkbox" name="subjects[]" value="Political Science"> Political Science
            </label>
            <label class="checkbox-inline" style="margin-top: 12px">
            <input type="checkbox" name="subjects[]" value="Maths"> Maths
            </label>      

  </div>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">House Name</label>
    <input type="text" class="form-control" name="house_name" placeholder="House Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Place</label>
    <input type="text" class="form-control" required name="place" placeholder="Place">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Post</label>
    <input type="text" class="form-control" name="post" placeholder="Post">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PIN</label>
    <input type="text" class="form-control" name="pin" placeholder="PIN">
  </div>
  <input type="submit" name="submit" class="form-control" id="exampleInputPassword1" value="submit" style="color: #fff;background-color: black">
    </form>
        </div>


 </div>
    <script src="js1/jquery.js"></script>
    <script src="js1/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js1/owl.carousel.min.js"></script>
    <script src="js1/mousescroll.js"></script>
    <script src="js1/smoothscroll.js"></script>
    <script src="js1/jquery.prettyPhoto.js"></script>
    <script src="js1/jquery.isotope.min.js"></script>
    <script src="js1/jquery.inview.min.js"></script>
    <script src="js1/wow.min.js"></script>
    <script src="js1/main.js"></script>
</body>
</html>
