<?php ob_start(); ?>   <!---Solution for "output has already sent" Error-->
<?php
//include '../lib/session.php';
//Session::checkLogin();
?>
<?php include '../config/config.php'; ?>
<?php include '../lib/database.php'; ?>
<?php include '../helpers/format.php'; ?>
<?php
	$db = new Database();
	$fm = new Format();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php
		$query = "select * from tbl_basic_info";
    $getData = $db->num_rows($query);
    if($getData)
    {
      $getData1 = $db->select($query);
      while($result = $getData1->fetch_assoc()) 
      {
?>
    <title><?php echo $result['name'];?>-Admin</title>
    <link rel="shortcut icon" href="<?php echo $result['favicon'];?>">
<?php } } ?>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Admin Login  Panel</h1>
                  </div>
                  <p>Admin has Full Access to Change this Website.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="login-form" method="post" action="">
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$email = $fm->validation($_POST['email']);
		$password = $fm->validation($_POST['password']);
		
		$email = mysqli_real_escape_string($db->link1, $email);
		$password = mysqli_real_escape_string($db->link1, $password);
		
		$query = "SELECT * FROM tbl_login WHERE email = '$email' AND password = '$password'";
		
		$result = $db->select($query);
		if($result != false)
		{	
			session_start();
			while($value = $result->fetch_assoc())
			{
				$_SESSION['login']=true;
				$_SESSION['user']=$value['email'];
			}
			
			header("Location:index.php");
		}
		else
		{
			echo "<span style='color:red; font-size:18px;'>email or Password Not Matched !!</span>";
		}
	}

?>
                    <div class="form-group">
                      <input id="login-email" type="email" name="email" required="" class="input-material">
                      <label for="login-email" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" required="" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
					<input type="submit" class="btn btn-primary" id="login" value="Login"/>
					
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="copyrights text-center">
<?php
$query = "select * from tbl_basic_info";
$getData = $db->num_rows($query);
if($getData)
{
  $getData1 = $db->select($query);
	while($result = $getData1->fetch_assoc()) 
	{
?>
        &copy; Copyright <strong><span><?php echo $result['name'];?></span></strong>. All Rights Reserved || Developed By <b><a href="#">Agamee-IT</a></b>
<?php } } else { ?>   
  &copy; Copyright <strong><span>Sujit Barua</span></strong>. All Rights Reserved || Developed By <b><a href="#">Agamee-IT</a></b>
<?php }?>
      </div>
	  
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>