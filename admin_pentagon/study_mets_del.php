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
$qr="delete from study_mets where id='$id'";
$ex=mysqli_query($con,$qr);
if($ex)
{

	?>
	<script>
	alert("Deleted");
	window.location.assign("study_mets.php");
	</script>
    <?php
}
else
{
?>	<script>
	alert("Error");
	window.location.assign("study_mets.php");
	</script>
<?php }
?>
