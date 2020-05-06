<?php 
include("config.php");
error_reporting(0);
session_start();
if($_SESSION['id']=="")
{
 header("Location:index.php");
}

if ($_POST)
{
	

    $mark = $_POST['mark'];
    $max_mark = $_POST['max_mark'];
    $subject = $_POST['subject'];
    $exam = $_POST['exam'];
    $student = $_POST['student'];

     $qr="INSERT INTO `mark_sheet`(`student`, `subject`, `max_mark`, `mark`, `exam`) VALUES('$student','$subject','$max_mark', '$mark', '$exam')";
    $ex=mysqli_query($con,$qr) or die(mysqli_error($con));

    if($ex)
    {
    	echo "success";
    }
    else
    {
    	echo "error";
    }

}
else {
	echo "error";
}
?>