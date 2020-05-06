<?php 
include("config.php");
error_reporting(0);
  session_start();
  if($_SESSION['id']=="")
  {
    header("Location:index.php");
  }
  if($_GET['exam'] && $_GET['student'])
  {
    $student=$_GET['student'];
    $exam = $_GET['exam'];
    $qry="SELECT mark_sheet.*, subjects.subject_name FROM `mark_sheet` LEFT JOIN `subjects` ON subjects.id = mark_sheet.subject WHERE mark_sheet.student='$student'  AND mark_sheet.exam = '$exam'";
    $result=mysqli_query($con,$qry)or die("Could not Connect My Sqli_DB");
    $exam_qry = "SELECT * FROM `exam_type` WHERE id='$exam'";
    $exam_qry = mysqli_query($con,$exam_qry)or die("Could not Connect My Sqli_DB");
    $exam_row = mysqli_fetch_row($exam_qry);

    $student_qry="SELECT students.*, course.name as course_name FROM `students` LEFT JOIN `course` ON course.id = students.course WHERE students.id ='$student'";
    $student_qry = mysqli_query($con,$student_qry)or die("Could not Connect My Sqli_DB");
    $student_row = mysqli_fetch_row($student_qry);

  }
  else
  {
    header("Location:students.php");
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
                     <h2>Pentagon Exam</h2>
                     <a href="exam_results.php?id=<?php echo $student; ?>">Back</a>   
                    </div>
                   
                </div>
                <hr />
                
<div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading"><?php echo $exam_row[1];?></div>
      <div class="panel-body">
        <table>
          <tr>
            <td>Name:</td>
            <td><?php echo $student_row[1];?></td>
          </tr>
          <tr>
            <td>Adminssion No: &nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td><?php echo $student_row[3];?></td>
          </tr>
          <tr>
            <td>Course: </td>
            <td><?php echo $student_row[4];?></td>
          </tr>
        </table>
        
       
      </div>
    </div>

  <table class="table table-hover table-center">
    <thead>
      <tr class='danger' >
      <th style='text-align: center; vertical-align: middle;'>Subject</th>
      <th style='text-align: center; vertical-align: middle;'>Mark</th>
      <th style='text-align: center; vertical-align: middle;'>Max. Mark</th>
    </tr>
    </thead>
    <tbody>
      <?php    
    while($row=mysqli_fetch_array($result))
      {?>

        <tr class='info' style='text-align: center; vertical-align: middle;'>
          <td>
            <?php echo $row['subject_name'];?>
          </td>
          <td>
            <?php echo $row['mark'];?>
          </td>
          <td>
            <?php echo $row['max_mark'];?>
          </td>
        </tr>

     <?php }?>
    </tbody>
  </table>
</div> 
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
