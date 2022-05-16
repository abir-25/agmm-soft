<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Change Password</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Basic Site Option</li>
              <li class="breadcrumb-item active">Change Password</li>
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
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><!--<a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>--></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Update Information</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$email = $fm->validation($_POST['email']);
		$old = $fm->validation($_POST['old']);
		$new = $fm->validation($_POST['new']);
		$confirm = $fm->validation($_POST['confirm']);
		
		$old = mysqli_real_escape_string($db->link1, $old);
		$new = mysqli_real_escape_string($db->link1, $new);
		$confirm = mysqli_real_escape_string($db->link1, $confirm);
		
    $query1 = "select * from tbl_login where email='$email'";
    $check1 = $db->select($query1);
    if($check1)
    {
      if($new == $confirm)
      {
        $cquery = "select * from tbl_login where password='$old' and email='$email'";
        $check = $db->select($cquery);
        if($check)
        {
          while($result = $check->fetch_assoc())
          {
            $query = "update tbl_login set password='$new' where email='$email'";
      
            $result1 = $db->update($query);
            if($result1)
            {
              echo "<span style='color:green; font-size:18px;'>Password Updated Successfully!</span>";	
            }
            else
            {
              echo "<span style='color:red; font-size:18px;'>Error!! Password Not Updated</span>";
            }
          }
        }
        else
        {
          echo "<span style='color:red; font-size:18px;'>Error!! Old Password Not Matched.</span>";
        }
      }
      else
      {
        echo "<span style='color:red; font-size:18px;'>Error!! New Password is Not Matched with Confirm Password.</span>";
      }
    }
    else
    {
      echo "<span style='color:red; font-size:18px;'>Error!! Email Id not found.</span>";
    }
  
	}
?>
                    
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" name="email" 
                            required class="form-control" placeholder="Enter Email Id">
                          </div>
                        </div>
                        <div class="line"></div>                      
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Old Password</label>
                          <div class="col-sm-9">
                            <input type="text" name="old" 
                            required class="form-control" placeholder="Enter Old Password">
                          </div>
                        </div>
						            <div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">New Password</label>
                          <div class="col-sm-9">
                            <input type="text" name="new" 
                            required class="form-control" placeholder="Enter New Password">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Confirm New Password</label>
                          <div class="col-sm-9">
                            <input type="text" name="confirm" 
                            required class="form-control" placeholder="Confirm New Password">
                          </div>
                        </div>			 					
     
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Update</button>
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