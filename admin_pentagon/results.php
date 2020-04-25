<?php 
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
    $subqry="SELECT * FROM `subjects` WHERE course_name='$crs'";
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
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>   
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
                
               <form method="POST" enctype="multipart/form-data">
 <div class="form-group">
    <label for="email">Course:</label>
    <select id="course" class="form-control" required name="course">
  <option value="">---Select---</option>
<?php 
          
    $qry1="SELECT * FROM `course`";
    $done1=mysqli_query($con,$qry1)or die("Could not Connect My Sqli_DB");
    while($row=mysqli_fetch_array($done1))
      {
          if($crs)
          {
            if($crs==$row[1])
            ?>
         <option selected="selected"><?php echo $row[1]; ?></option>
         <?php 
          }
          else
          {?>
               <option ><?php echo $row[1]; ?></option><?php
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
         <option><?php echo $row[1]; ?></option>
         
          <?php           
      }
      ?>

</select>
  </div>
   
            
  <div class="form-group">
    <label for="email">Student Name:</label>
    <input type="text" class="form-control" placeholder="Enter the Student Name" name="sname">
  </div>
  <div class="form-group">
    <label for="pwd">Admission No:</label>
    <input type="text" class="form-control" placeholder="Enter the Admission Number" name="admno">
  </div>
  <div class="form-group">
        <table class="table">
        <?php while($row=mysqli_fetch_array($subex))
      {
          ?>
         
        <tr> <td>
    <label for="email"><?php echo $row[1]; ?>:</label></td><td>
    <input type="number" class="form-control" style="width: 45%;" placeholder="Mark" name="<?php echo 'mark'.$row[1]; ?>"></td><td>
<input type="number" class="form-control" style="width: 45%;" placeholder="Max. Mark" name="<?php echo 'max'.$row[1]; ?>">
</td>
</tr>
          <?php           
      }
      ?>
</table>
  </div> 
  <br>
   <div class="form-group">
  <button type="submit" class="btn btn-danger form-control">Upload</button></div>
</form>  
<br>         
<?php 
if($_POST)
{
  $name=$_POST['sname'];
  $admission=$_POST['admno'];
  $course=$_POST['course'];
                echo "<script>alert('ddggtddd')</script>";

  $exam=$_POST['exam'];
    $subqry="SELECT * FROM `subjects` WHERE course_name='$crs'";
      $subex=mysqli_query($con,$subqry)or die("Could not Connect My Sqli_DB");
  while($row=mysqli_fetch_array($subex))
      {
        $subject=$row[1];
        $markname='mark'.$row[1];
        $maxname='max'.$row[1];
        $Mark=$_POST[$markname];
        $max_mark=$_POST[$maxname];

   $qr="INSERT INTO `result`(`name`,`subject`,`ad_no`,`course`,`exam_type`,`mark`,`max`) VALUES('$name','$subject','$admission','$course','$exam','$Mark','$max_mark')";
              $ex=mysqli_query($con,$qr) or die(mysqli_error($con));
              echo "<script>alert('ddddd')</script>";
      }
          echo $ex; 
}

?>

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
