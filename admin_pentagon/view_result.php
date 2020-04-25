<?php 
include("config.php");
error_reporting(0);
  session_start();
  if($_SESSION['id']=="")
  {
    header("Location:index.php");
  }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  </script>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   
</head>
<body style="text-align: center;margin: 40px">
                      <a href="results.php" class="btn btn-info">Back</a>      
<br>
  <table class="table table-condensed">
    <thead><tr class="danger" ><th style="text-align: center; vertical-align: middle;">Student</th>
<th style="text-align: center; vertical-align: middle;">Subject</th>
      <th style="text-align: center; vertical-align: middle;">Admission No</th>
<th style="text-align: center; vertical-align: middle;">Course</th>
<th style="text-align: center; vertical-align: middle;">Exam</th>
<th style="text-align: center; vertical-align: middle;">Mark</th>
<th style="text-align: center; vertical-align: middle;">Full mark</th>
    </tr></thead>
    <tbody>
      <?php 
          
    $qry1="SELECT * FROM `result`";
    $done1=mysqli_query($con,$qry1)or die("Could not Connect My Sqli_DB");
    while($row=mysqli_fetch_array($done1))
      {
          echo "<tr class='info' ><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td>";?>
         
          <?php           
      }
      ?>
        
    </tbody>
  </table>

</body>
</html>