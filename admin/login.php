<?php ob_start(); ?>   <!---Solution for "output has already sent" Error-->
<?php
?>
<?php include '../config/config.php'; ?>
<?php include '../lib/database.php'; ?>
<?php include '../helpers/format.php'; ?>
<?php
	$db = new Database();
	$fm = new Format();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php
		$query = "select * from tbl_basic_info";
    $getData = $db->num_rows($query);
    if($getData)
    {
      $getData1 = $db->select($query);
      while($result = $getData1->fetch_assoc()) 
      {
        $company_name = $result['name'];
        $company_favicon = $result['favicon'];
      }
    }
?>
    <title><?php echo $company_name;?>-Admin</title>
    <link rel="shortcut icon" href="<?php echo $company_favicon;?>">
    <link rel="stylesheet" href="css/login.css" />
    <link
      href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="overlay">
      <form method="post" action="">
        <div class="con">
          <header class="head-form">
            <h2><?php echo $company_name;?></h2>
            <p>login here using your email and password</p>
          </header>

          <br />
          <div class="field-set">
            <select name="role" id="txt-input" required>
              <option value="-1">Select User Role</option>
              <option value="0">Admin</option>
              <option value="1">Editor</option>
            </select>

            <br />
            <input
              class="form-input"
              type="email"
              placeholder="Enter your Email"
              id="txt-input"
              name="email"
              required
            />

            <br />
            <input
              class="form-input"
              type="password"
              placeholder="Enter your Password"
              id="pwd"
              name="password"
              required
            />

          <div>
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
    $role = $fm->validation($_POST['role']);
    $email = $fm->validation($_POST['email']);
    $password = $fm->validation($_POST['password']);

		$role  = mysqli_real_escape_string($db->link1, $role);
		$email  = mysqli_real_escape_string($db->link1, $email);
		$password  = mysqli_real_escape_string($db->link1, $password);

		// $email = mysqli_real_escape_string($db->link1, $email);
		// $password = mysqli_real_escape_string($db->link1, $password);
		
    if($role!=-1)
    {
      $query = "SELECT * FROM tbl_login WHERE role = '$role' AND email = '$email' AND password = '$password'";
      
      $result = $db->select($query);
      if($result != false)
      {	
        session_start();
        while($value = $result->fetch_assoc())
        {
          $_SESSION['login']=true;
          $_SESSION['user']=$value['email'];
          $_SESSION['name']=$value['name'];
          $_SESSION['role']=$value['role'];
        }
        
        header("Location:index.php");
      }
      else
      {
        echo "<span style='color:red; font-size:18px;'>email or Password Not Matched !!</span>";
      }
    }
    else
    {
      echo "<span style='color:red; font-size:18px;'>Please select user Role!!</span>";
    }
	}

?>
            </div>


            <br />
            <button class="log-in">
              Login
              <i class="fa fa-user-plus" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </form>
    </div>

    <script>
      function show() {
        var p = document.getElementById("pwd");
        p.setAttribute("type", "text");
      }

      function hide() {
        var p = document.getElementById("pwd");
        p.setAttribute("type", "password");
      }

      var pwShown = 0;

      document.getElementById("eye").addEventListener(
        "click",
        function () {
          if (pwShown == 0) {
            pwShown = 1;
            show();
          } else {
            pwShown = 0;
            hide();
          }
        },
        false
      );
    </script>
  </body>
</html>
