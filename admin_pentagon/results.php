﻿<?php 
include("config.php");
error_reporting(0);
  session_start();
  if($_SESSION['id']=="")
  {
    header("Location:index.php");
  }
  if($_GET['crs'])
  {
    $crs=$_GET['crs'];
    $subqry="SELECT * FROM `subjects` WHERE course='$crs'";
    $subex=mysqli_query($con,$subqry)or die("Could not Connect My Sqli_DB");
  }
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="assets/js/jquery.js"></script>  
   <style type="text/css">
     .cell_item span:hover
     {
background-color: blue;
     }
   </style>

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin_home.php">Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="#"><i class="fa fa-dashboard fa-3x"></i>Online Examination</a>                    </li>
                      <li>
                        <a  href="#"><i class="fa fa-desktop fa-3x"></i> Notification</a>                    </li>
                     <li>
                        <a  href="study_mets.php"><i class="fa fa-file fa-3x"></i> Study Mets</a>                    </li>
                      <li  >
                        <a  href="#"><i class="fa fa-table fa-3x"></i> Attendance</a>                    </li>
                    <li  >
                        <a  href="results.php"><i class="fa fa-edit fa-3x"></i> Results </a>                    </li>					
					                   
                    <li>
                      <a href="#"><i class="fa fa-sitemap fa-3x"></i>Request<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                              <a href="#">Students</a>                            </li>
                            <li>
                                <a href="#">Teachers</a>                            </li>
                            
                        </ul>
                  </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
       <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Results Upload</h2>   
                     <a href="view_result.php" class="btn btn-info">View Results</a>     
                       
                    </div>
                   
                </div>
                <hr />
                
  <form method="POST" enctype="multipart/form-data" action="upload_results.php">
 <div class="form-group">
    <label for="email">Course:</label>
    <select id="course" class="form-control"  required name="course">
  <option value="">---Select---</option>
<?php 
          
    $qry1="SELECT * FROM `course`";
    $done1=mysqli_query($con,$qry1)or die("Could not Connect My Sqli_DB");
    while($row=mysqli_fetch_array($done1))
      {

            if($crs==$row['id'])
            {
            ?>
         <option selected="selected" value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
         <?php 
          }

          else
          {?>
               <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option><?php
          }

      }
      ?>

</select>
  </div>
  <script type="text/javascript">
                $("#course").change(function(){
                  var course_name=$('#course').val();
                    window.location.assign("results.php?crs="+course_name);
                });

  </script>
        <div class="form-group">
    <label for="email">Exam:</label>
      <select class="form-control" required name="exam">
  <option value="">---Select---</option>
<?php 
          
    $qry1="SELECT * FROM `exam_type`";
    $done1=mysqli_query($con,$qry1)or die("Could not Connect My Sqli_DB");
    while($row=mysqli_fetch_array($done1))
      {
          ?>
         <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
         
          <?php           
      }
      ?>

</select>
  </div>
   

  <div class="form-group">
    <select class="form-control" name="subject">
        <?php while($row=mysqli_fetch_array($subex))
      {
          ?>
          <option value="<?php echo $row['id']; ?>">
            <?php echo $row['subject_name']; ?>
          </option>
          <?php           
      }
      ?>
</select>
  </div> 
  <br>
   <div class="form-group">
  <button type="submit" name="next"  class="btn btn-danger form-control">Next</button></div>
</form>  
<br>         

      <!-- /. ROW  -->
         <br>

               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
