<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Add Team Member</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Team Option</li>
			  <li class="breadcrumb-item active">Add Team Member</li>
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
                      <h3 class="h4">Enter Information</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
    $name = $fm->validation($_POST['name']);
    $designation = $fm->validation($_POST['designation']);
    $type = $fm->validation($_POST['type']);
    $fb = $fm->validation($_POST['fb']);
    $ins = $fm->validation($_POST['ins']);
    $li = $fm->validation($_POST['li']);
    $tw = $fm->validation($_POST['tw']);
    $git = $fm->validation($_POST['git']);

		$name  = mysqli_real_escape_string($db->link1, $name);
		$designation  = mysqli_real_escape_string($db->link1, $designation);
		$type = mysqli_real_escape_string($db->link1, $type);
		$fb = mysqli_real_escape_string($db->link1, $fb);
		$ins = mysqli_real_escape_string($db->link1, $ins);
		$li = mysqli_real_escape_string($db->link1, $li);
		$tw = mysqli_real_escape_string($db->link1, $tw);
		$git = mysqli_real_escape_string($db->link1, $git);

		 
		$permitted  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_temp = $_FILES['image']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/team/".$unique_image;	

        if (in_array($file_ext, $permitted) === false) 
        {
            echo "<span class='error'>You can upload only:-".implode(', ', $permitted)."</span>";
        }
        elseif ($file_size >1048567) 
        {
            echo "<span class='error'>Image size must be less then 1MB!
            </span>";
        }  
        else
        {	
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO tbl_team(name, designation, image, type, fb, ins, tw, li, git) VALUES('$name','$designation','$uploaded_image','$type','$fb','$ins','$tw','$li','$git')";
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
	}
?>

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" required placeholder="Enter Team Members' name">
                          </div>
                        </div>
						<div class="line"></div>
            <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Designation</label>
                          <div class="col-sm-9">
                            <input type="text" name="designation" class="form-control" required placeholder="Enter Team Members' Designation">
                          </div>
                        </div>
            <div class="line"></div>
            <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Select Team Member Type</label>
                          <div class="col-sm-9">
                            <select name="type" id="" class="form-control role-select">
                              <option value="-1">Team Member Type</option>
                              <option value="0">Management</option>
                              <option value="1">Employee</option>
                            </select>
                          </div>
                        </div>  
                        <div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Upload Image</label>
                          <div class="col-sm-9" style="text-align:center">
                            <input type="file" name="image" class="form-control" required>
                          </div>
                        </div>  
						
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Facebook Link</label>
                          <div class="col-sm-9">
                            <input type="text" name="fb" class="form-control" placeholder="Enter Team Members' Facebook Id Link">
                          </div>
                        </div>
                        <div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Instagram Link</label>
                          <div class="col-sm-9">
                            <input type="text" name="ins" class="form-control" placeholder="Enter Team Members' Instagram Id Link">
                          </div>
                        </div>
                        <div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Linked In Link</label>
                          <div class="col-sm-9">
                            <input type="text" name="li" class="form-control" placeholder="Enter Team Members' Linked In Id Link">
                          </div>
                        </div>
                        <div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Twitter Link</label>
                          <div class="col-sm-9">
                            <input type="text" name="tw" class="form-control" placeholder="Enter Team Members' Twitter Id Link">
                          </div>
                        </div>
                        <div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">GitHub Link</label>
                          <div class="col-sm-9">
                            <input type="text" name="git" class="form-control" placeholder="Enter Team Members' Github Id Link">
                          </div>
                        </div>
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