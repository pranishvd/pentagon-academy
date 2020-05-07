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
$qr="delete from application_form where id='$id'";
$ex=mysqli_query($con,$qr) or die(mysqli_error($con));
if($ex)
{

	?>
	<script>
	window.location.assign("applications.php");
	</script>
    <?php
}
else
{
	//print_r($ex);
?>	<script>
	alert("Error");
	window.location.assign("applications.php");
	</script>
<?php }
?>