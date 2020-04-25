<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2>Login</h2>
               
                <h5>( Login yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Your Username" name="username" />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" placeholder="Your Password" name="password" />
                                        </div>
                                    <div class="form-group">
                                           
                                           
                                        </div>
                                     
                                     <input type="submit" name="login" class="btn btn-primary " value="Login Now" />
                                    <hr />
                                     
                                    </form>
  
 <?php
  error_reporting(0);
  session_start();
  include("config.php");
  if(isset($_POST['login']))
  {
  $username=$_POST['username'];
  $password=$_POST['password'];
  $qry1="select * from admin_login";
  //SELECT uid, email, password, type FROM login where  email='$username' and password='$password'
  $done1=mysqli_query($con,$qry1);
  while($a=mysqli_fetch_array($done1))
  {
  $user=$a['username'];
  $pass=$a['password'];
  
   if(($username==$user)&&($password==$pass))
   {
   $_SESSION['id']="admin_pro";
   ?>
   <script type="text/javascript">
   alert("Admin Login");
   window.location.assign("admin_home.php");
   </script>
   <?php
  
  exit;
   }
   else
   {
    ?>
   <script type="text/javascript">
   alert("Admin Login error");
   </script>
   <?php
   }
   
  }}
  ?>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
