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
	$subject = $_POST['subject'];
    $exam = $_POST['exam'];
    $student = $_POST['student'];
	$qr="delete from mark_sheet where subject='$subject' and student='$student' and exam='$exam'";
	$ex=mysqli_query($con,$qr);
	if($ex)
	{
		echo "success";
	}
	else
	{
		echo "error";
	}
}
?>