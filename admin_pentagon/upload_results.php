<?php 
include("config.php");
error_reporting(0);
  session_start();
  if($_SESSION['id']=="")
  {
    header("Location:index.php");
  }

if(!isset($_POST['next']))
{
   header("Location:results.php");
  // print_r($_POST);
}
else
{
  $course = $_POST['course'];
  $exam_id = $_POST['exam'];
  $subject_id = $_POST['subject'];
  $students = "SELECT * FROM `students` WHERE course='$course'";
 // $course = "SELECT * FROM `course` WHERE id='$course'";
  $exam = "SELECT * FROM `exam_type` WHERE id='$exam_id'";
  $subject = "SELECT subjects.*, course.name as course_name FROM `subjects` LEFT JOIN `course` ON course.id = subjects.course WHERE subjects.id='$subject_id'";
}

?>

<!DOCTYPE html>
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

<script type="text/javascript">
  function addMax()
  {
    $('#max_mark').attr('disabled','disabled')


  }
  function addMark(student)
  {
    var max_mark = $('#max_mark').val()
    var mark = $('#mark_'+student).val()
    var subject = "<?php echo $subject_id;?>";
    var exam = "<?php echo $exam_id ?>";
    if (max_mark != "")
    {
      max_mark = 100;
    }

    if (mark && max_mark)
    {
    $.ajax({
      url: 'add_mark.php',
      type: 'POST',
      data: {mark: mark, max_mark: max_mark, subject: subject, exam: exam, student: student },
        error: function(data) {
          alert('Something is wrong');
          console.log(data)
           },

           success: function(data) {
                if (data == "success")
                {
                  $('#add_'+student).attr('disabled','disabled')
                  $('#remove_'+student).removeAttr('disabled')
                }  

           }

        });  
  }
  else
  {
    //reqiued
  }

  }

  function removeMark(student)
  {
    var subject = "<?php echo $subject_id;?>";
    var exam = "<?php echo $exam_id ?>";


    if (subject && exam)
    {
    $.ajax({
      url: 'remove_mark.php',
      type: 'POST',
      data: {subject: subject, exam: exam, student: student },
        error: function(data) {
          alert('Something is wrong');
          console.log(data)
           },

           success: function(data) {
                if (data == "success")
                {
                  $('#remove_'+student).attr('disabled','disabled')
                  $('#add_'+student).removeAttr('disabled')
                }  

           }

        });  
  }
  else
  {
    //reqiued
  }

  }

</script> 

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
                        <a  href="notification_up.php"><i class="fa fa-desktop fa-3x"></i> Notification</a>                    </li>
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
                     <h2>Upload Results</h2>
                       <a class="btn btn-link" href="results.php">Back</a>
        
                    </div>
                   
                </div>

                <hr />

      <!-- /. ROW  -->
<div class="container">
  <?php 
  $subject_data=mysqli_query($con,$subject)or die("Could not Connect My Sqli_DB");
  $subject_row = mysqli_fetch_row($subject_data);
  $exam_data=mysqli_query($con,$exam)or die("Could not Connect My Sqli_DB");
  $exam_row = mysqli_fetch_row($exam_data);  
  ?>
  <h2><?php echo $subject_row[3]." => ".$subject_row[1];?></h2>
  <h2><b>Exam : </b><?php echo $exam_row[1];?></h2>
</div>


            <hr/>
<table class="table table-condensed">
    <thead><tr class="danger" >
      <th style="text-align: center; vertical-align: middle;">Name</th>
      <th style="text-align: center; vertical-align: middle;">Admission no</th>
      <th style="text-align: center; vertical-align: middle;">Mark</th>
      <th></th>
      <th></th>
    </tr>
    </thead>
    <tbody>
      <tr class="success" style='text-align: center; vertical-align: middle;'>
          <td>Max. Mark</td>
          <td></td>
          <td><input type="text" id="max_mark" value="100" class="form-control" style="width: 20%;text-align: center;margin-left: 40%;" placeholder="mark"></td>
         <td><span class="btn btn-success" onclick="addMax()" id="add_max_mark">Update</span></a></td>  
        <td></td>
      </tr>
      <?php 

    $done1=mysqli_query($con,$students)or die("Could not Connect My Sqli_DB");
    while($row=mysqli_fetch_array($done1))
      {

          echo "<tr class='info' style='text-align: center; vertical-align: middle;' ><td>".$row['name']."</td><td>".$row['admission_no']."</td>";
          
          ?>
          <td><input type="text" id="mark_<?php echo $row['id'];?>" class="form-control" style="width: 20%;text-align: center;margin-left: 40%;" placeholder="mark"></td>
         <td><span class="btn btn-info" id="add_<?php echo $row['id'];?>" onclick="addMark('<?php echo $row['id'];?>');">Add</span></a></td>
         <td><span class="btn btn-danger" disabled id="remove_<?php echo $row['id'];?>" onclick="removeMark('<?php echo $row['id'];?>');">Remove</span></a></td>
         </tr>
          <?php           
      }
      ?>
        
    </tbody>
  </table>
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
