<?php  session_start();
extract($_SESSION);
if($_SESSION['id'])
{
  $user=$_SESSION['id'];
  include("config.php");
}
else
    {
?>
<script type="text/javascript">location.assign("index.php")</script>
<?php
    }


$id=$_GET['id'];
$qr="delete from course where id='$id'";
$ex=mysqli_query($con,$qr);
if($ex)
{

	?>
	<script>
	alert("Deleted");
	window.location.assign("course.php");
	</script>
    <?php
}
else
{
?>	<script>
	alert("Error");
	window.location.assign("course.php");
	</script>
<?php }
?>
