<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Add Editor</h2>
            </div>
          </header>
<?php 
  if($_SESSION['role'] != 0)
  {
		echo "<script>window.location = 'index.php'; </script>";
	}
?>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Editor Option</li>
			  <li class="breadcrumb-item active">Add Editor</li>
			</ul>
          </div>
          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
               
               
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Enter Information</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post">
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
    $name = $fm->validation($_POST['name']);
    $email = $fm->validation($_POST['email']);
    $password = $fm->validation($_POST['password']);

		$name  = mysqli_real_escape_string($db->link1, $name);
		$email  = mysqli_real_escape_string($db->link1, $email);
		$password  = mysqli_real_escape_string($db->link1, $password);

    $query1 = "SELECT * from tbl_login where email='$email'";
    $result1 = $db->select($query1);

    if($result1 == false){
      $query = "INSERT INTO tbl_login(role, name, email, password) VALUES('1', '$name','$email','$password')";
      $inserted_rows = $db->insert($query);
      if ($inserted_rows) 
      {
          echo "<span class='success'>Data Inserted Successfully.
          </span>";
      }
      else 
      {
          echo "<span class='error'>Data Not Inserted !!</span>";
      }
    }
    else{
      echo "<span class='error'>Email already exists !! Please provide new Email</span>";
    }
  }
?>

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Editor Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" required placeholder="Enter Editor Name">
                          </div>
                        </div>
						            <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Editor Email</label>
                          <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" required placeholder="Enter Editor Email">
                          </div>
                        </div>
						            <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Editor Password</label>
                          <div class="col-sm-9">
                            <input type="password" name="password" class="form-control" required placeholder="Enter Editor Password">
                          </div>
                        </div>
						            <div class="line"></div>

						            <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Add</button>
                          </div>
                        </div>
         
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Page Footer-->
<?php include "inc/footer.php"; ?>
        </div>
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