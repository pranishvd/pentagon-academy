<?php 
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pentagon academy ,Best tution center in calicut,Best tution center in calicut,tution for plus two,tution for plus one,hiegher secondary calicut,pentagon academy,calicut,kozhicode,pentagonacademy.com,commerce,best kozhikode,tution center,privet school,one year,one year plus two,one year hier secondary,kerala,mcom,bcom,bca,bba,pentagon academy com,pentagonacademy.com,pentagonacademy calicut,pentagon academy kozhikode,malappuram,kannur,pentagonacademy calicut,pentagon academy kozhikode </title>
	<!-- core CSS -->
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/font-awesome.min.css" rel="stylesheet">
    <link href="css1/animate.min.css" rel="stylesheet">
    <link href="css1/owl.carousel.css" rel="stylesheet">
    <link href="css1/owl.transitions.css" rel="stylesheet">
    <link href="css1/prettyPhoto.css" rel="stylesheet">
    <link href="css1/main.css" rel="stylesheet">
    <link href="css1/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/photo.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/photo.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/photo.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/photo.jpg">
    <link rel="apple-touch-icon-precomposed" href="images/photo.jpg">
    <style type="text/css">
         #slide-sm1
            {
        background-image: url('bg1.JPG');
        height: 500px;
            } 
            .slide-sm{
                height: 500px;
            }       
        @media screen and (max-width: 800px) {
         #slide-sm1
            {
           background-repeat: no-repeat;
            background-size: 30px 100px;
            
             }
        }

 /* pop up*/
#confirm {
	    z-index:2147483647 ;
            display: none;
	    opacity:.9;
            background-image: url(banner.png);
	    background-repeat: no-repeat;
	    background-size: 100% 100%;  
            border: 1px solid #aaa;
            position: fixed;
            width: 40%;
	    top :10px;
	    left:30%;	
	    height :95%;         
            padding: 6px 8px 8px;
            box-sizing: border-box;
            text-align: center;
            border-radius: 5px;
         }
         #confirm button {
            background-color: rgba(51, 170, 51, .0) ;
            display: inline-block;
            border-radius: 10px;
	    margin-right:4%;
            position: absolute;
	    margin-left:90%;
	    right:0;
	    color : #fff;
            border: 1px solid #aaa;
            padding: 5px;
            text-align: center;
            width: auto;
	    font-weight: bold;
            cursor: pointer;
         }
         #confirm button:hover {
	   background-color:#00264d;
	   color : #fff; 
	 }
         }
         #confirm .message {
            text-align: left;
           
         }
@media screen and (max-width: 800px) {
 #confirm {
	    
            display: none;
	    opacity:.9;
            background-image: url(banner.png);
	    background-repeat: no-repeat;
	    background-size: 100% 100%;  
            border: 1px solid #aaa;
            position: fixed;
            width: 90%;
	    margin-top :20px;
	    left:5%;	
	    height :90%;         
            padding: 6px 8px 8px;
            box-sizing: border-box;
            text-align: center;
            border-radius: 5px;
         }
         #confirm button {
            background-color: rgba(51, 170, 51, .0) ;
            display: inline-block;
            border-radius: 10px;
	    margin-right:4%;
            position: absolute;
	    margin-left:90%;
	    right:0;
	    color : #fff;
            border: 1px solid #aaa;
            padding: 5px;
            text-align: center;
            width: auto;
	    font-weight: bold;
            cursor: pointer;
         }
         #confirm button:hover {
	   background-color:#00264d;
	   color : #fff; 
	 }
         }
         #confirm .message {
            text-align: left;
           
         }

}
.carousel-inner img {
  -webkit-filter: grayscale(90%);
  filter: grayscale(90%); /* make all photos black and white */
  width: 100%; /* Set width to 100% */
  margin: auto;
  height : 50px;
}
@media screen and (max-width: 800px) {
.carousel-inner
{
top:20px;
}
#logo_pent
{
    font-size :15px;
}
}

    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
      </script>
      <script>
         function functionAlert(msg, myYes) {
            var confirmBox = $("#confirm");
            confirmBox.find(".message").text(msg);
            confirmBox.find(".yes").unbind().click(function() {
               confirmBox.hide();
            });
            confirmBox.find(".yes").click(myYes);
            confirmBox.show();
         }
      </script>
</head><!--/head-->

<body id="home" class="homepage" >
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
      </li>               <li class="scroll"><a href="#">Courses</a></li>
                        <li class="scroll"><a href="ApplicationForm.php">Application Form</a></li>
                        <li class="scroll"><a href="index.html#meet-team">Team</a></li>  
                        <li class="scroll"><a href="#">Careers</a></li> 
                             
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
   
<?php 
$exam=$_GET['id'];
?>
    

    <section id="features">
        <div class="container">
            <div class="section-header">
                  <form class="form-group" method="POST" action="marksheet.php?id=<?php echo $exam; ?>">
<input class="form-control" required style="text-align:center;" type="text" placeholder="Enter Your Enroll Number" name="e_number">
                       <br>
                       <input type="submit" value="Submit" class="btn btn-info form-control" name="submit">
                   </form>
              
                      </div>
            
        </div>
    </section>

    

  
    

    <footer id="footer">
        <div class="container" >
            <div class="row">
                <div class="col-sm-6" >
                    
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">   
   <li><a href="https://www.facebook.com/Pentagon-Academy-386624538472134/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

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
