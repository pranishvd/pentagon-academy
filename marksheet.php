    <?php
include("config.php");
$exam=$_GET['id'];
if($_POST['submit'])
{
$enr=$_POST['e_number'];
$qry1="SELECT * FROM `students` WHERE  `admission_no`='$enr'";
$done1=mysqli_query($con,$qry1)or die('con');
$student_row=mysqli_fetch_row($done1);
$student = $student_row[0];

$exam_qry = "SELECT * FROM `exam_type` WHERE id='$exam'";
$exam_qry = mysqli_query($con,$exam_qry)or die("Could not Connect My Sqli_DB");
$exam_row = mysqli_fetch_row($exam_qry);


$qry="SELECT mark_sheet.*, subjects.subject_name FROM `mark_sheet` LEFT JOIN `subjects` ON subjects.id = mark_sheet.subject WHERE mark_sheet.student='$student'  AND mark_sheet.exam = '$exam'";
$result=mysqli_query($con,$qry)or die('con');
 

$student_qry="SELECT students.*, course.name as course_name FROM `students` LEFT JOIN `course` ON course.id = students.course WHERE students.id ='$student'";
$student_qry = mysqli_query($con,$student_qry)or die("Could not Connect My Sqli_DB");
$student_row = mysqli_fetch_row($student_qry);
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="admin_pentagon/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="admin_pentagon/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="admin_pentagon/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="admin_pentagon/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="admin_pentagon/assets/js/jquery.js"></script> 
</head>                  
<body>
  
<div  >
  <div style="width: 100%;margin: 10px 20px 10px 0px;background-color: #fff !important;padding: 10px;">
      <div class="container">
         <div class="col-md-12">
           <h2 id="logo_pent" style="color:#0099e6;text-transform: uppercase;"><span style="color: #0099e6;">Pentagon Academy</h2>
              <a href="result.php">Back</a>   
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
</div>
</div>
    <script src="admin_pentagon/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="admin_pentagon/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="admin_pentagon/assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="admin_pentagon/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="admin_pentagon/assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="admin_pentagon/assets/js/custom.js"></script>
</body>

</html>