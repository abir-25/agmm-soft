<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Update Editor</h2>
            </div>
          </header>
<?php
	if(!isset($_GET['editorId']) || $_GET['editorId'] == NULL)
	{
		echo "<script>window.location = 'editorlist.php'; </script>";
	}
	else
	{
		$editorId = $_GET['editorId'];
	}
?>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Editor Option</li>  
              <li class="breadcrumb-item active">Update Editor</li>
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
                      <h3 class="h4">Edit Information</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
    $name  = mysqli_real_escape_string($db->link1, $_POST['name']);
		$email  = mysqli_real_escape_string($db->link1, $_POST['email']);
		$password  = mysqli_real_escape_string($db->link1, $_POST['password']);


    $query = "UPDATE tbl_login
                SET 
                name = '$name',
                email = '$email',
                password = '$password'
                where id='$editorId'";
    
    $updated_rows = $db->update($query);
    if ($updated_rows) 
    {
        echo "<span class='success'>Data Updated Successfully.
        </span>";
    }
    else 
    {
        echo "<span class='error'>Data Not Updated !!</span>";
    }
}
?>
<?php
	$query1 = "select * from tbl_login where id='$editorId'";
	    $getpost = $db->select($query1);
      if($getpost)
      {
	      while($postresult = $getpost->fetch_assoc())
	      {
?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Editor Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" required value="<?php echo $postresult['name'];?>">
                          </div>
                        </div>
						            <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Editor Email</label>
                          <div class="col-sm-9">
                            <input type="text" name="email" class="form-control" required value="<?php echo $postresult['email'];?>">
                          </div>
                        </div>
						            <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Editor Password</label>
                          <div class="col-sm-9">
                            <input type="text" name="password" class="form-control" required value="<?php echo $postresult['password'];?>">
                          </div>
                        </div>
						            <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                        </div>
<?php } } else { ?>
                      <p class="text-center py-4">No data Available</p>
<?php } ?>
	
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
    <script src="vendor/popper.js/umd/popper.min.js">


    </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js">


    </script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
</body>

</html>
