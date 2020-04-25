    <?php
                  include("config.php");
                   $exam=$_GET['id'];
                  // echo $exam;
                  if($_POST['submit'])
                  {
                    $enr=$_POST['e_number'];
$qry1="SELECT * FROM `result` WHERE `exam_type`='$exam' AND `ad_no`='$enr'";
    $done1=mysqli_query($con,$qry1)or die('con');
    while($row=mysqli_fetch_array($done1))
      {
          
      }
                  }
                  ?>