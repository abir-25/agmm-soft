<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Basic Information</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Basic Site Option</li>
			  <li class="breadcrumb-item active">Basic Information</li>
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
                      <h3 class="h4">Update Information</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$name = $fm->validation($_POST['name']);
		$slogan = $fm->validation($_POST['slogan']);
		$copyright = $fm->validation($_POST['copyright']);

    	$name = mysqli_real_escape_string($db->link1, $name);
    	$slogan = mysqli_real_escape_string($db->link1, $slogan);
    	$copyright = mysqli_real_escape_string($db->link1, $copyright);
		 
		$permitted  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $_FILES['logo']['name'];
		$file_size = $_FILES['logo']['size'];
		$file_temp = $_FILES['logo']['tmp_name'];

		$file_name2 = $_FILES['favicon']['name'];
		$file_size2 = $_FILES['favicon']['size'];
		$file_temp2 = $_FILES['favicon']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/bio/".$unique_image;
	
		$div2 = explode('.', $file_name2);
		$file_ext2 = strtolower(end($div2));
		$unique_image2 = substr(md5(time()), 0, 10).'.'.$file_ext2;
		$uploaded_image2 = "upload/bio/".$unique_image2;
	

		move_uploaded_file($file_temp, $uploaded_image);
		move_uploaded_file($file_temp2, $uploaded_image2);
	

		$query1 = "select * from tbl_basic_info";
		$getpost = $db->num_rows($query1);
		if(!$getpost)
		{
			if(empty($file_name)){
				echo "<span class='error'>Please upload your Logo!!</span>";
			}
			else if(empty($file_name2)){
				echo "<span class='error'>Please upload your Favicon!!</span>";
			}
			else{
				
				$query = "INSERT INTO tbl_basic_info(name, slogan, logo, favicon, copyright) VALUES('$name','$slogan','$uploaded_image','$uploaded_image2','$copyright')";
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

		else{
			if(!empty($file_name) && !empty($file_name2))
			{
				if (in_array($file_ext, $permitted) === false) 
				{
					 echo "<span class='error'>You can upload only:-"
					 .implode(', ', $permitted)."</span>";
				} 
				else if (in_array($file_ext2, $permitted) === false) 
				{
					 echo "<span class='error'>You can upload only:-"
					 .implode(', ', $permitted)."</span>";
				} 
				else
				{	
					move_uploaded_file($file_temp, $uploaded_image);
					move_uploaded_file($file_temp2, $uploaded_image2);
					
					$query = "UPDATE tbl_basic_info 
							  SET 
							  name = '$name',
							  slogan = '$slogan',
							  logo = '$uploaded_image',
							  favicon = '$uploaded_image2',
							  copyright = '$copyright'";
					
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
			}
			else if(!empty($file_name))
			{
				if (in_array($file_ext, $permitted) === false) 
				{
					 echo "<span class='error'>You can upload only:-"
					 .implode(', ', $permitted)."</span>";
				} 
				else
				{	
					move_uploaded_file($file_temp, $uploaded_image);
					$query = "UPDATE tbl_basic_info 
							  SET 
							  name = '$name',
							  slogan = '$slogan',
							  logo = '$uploaded_image',
							  copyright = '$copyright'";
					
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
			}
			else if(!empty($file_name2))
			{
				if (in_array($file_ext2, $permitted) === false) 
				{
					 echo "<span class='error'>You can upload only:-"
					 .implode(', ', $permitted)."</span>";
				} 
				else
				{	
					move_uploaded_file($file_temp2, $uploaded_image2);
					$query = "UPDATE tbl_basic_info 
							  SET 
							  name = '$name',
							  slogan = '$slogan',
							  favicon = '$uploaded_image2',
							  copyright = '$copyright'";
					
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
			}
			else{
				$query = "UPDATE tbl_basic_info 
							  SET 
							  name = '$name',
							  slogan = '$slogan',
							  copyright = '$copyright'";
					
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
		}

	
	}
?>

<?php
	$query1 = "select * from tbl_basic_info";
	$getpost = $db->num_rows($query1);
    if($getpost)
    {
	    $getpost = $db->select($query1);
	    while($postresult = $getpost->fetch_assoc())
	    {
?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" required value="<?php echo $postresult['name']; ?>">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Slogan</label>
                          <div class="col-sm-9">
                            <input type="text" name="slogan" class="form-control" required value="<?php echo $postresult['slogan']; ?>">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Upload Logo</label>
                          <div class="col-sm-9" style="text-align:center">
						  <img src="<?php echo $postresult['logo'];?>" height="200px" width="200px"/><br/>
                            <input type="file" name="logo" class="form-control">
                          </div>
                        </div>  
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Upload Favicon</label>
                          <div class="col-sm-9" style="text-align:center">
						  <img src="<?php echo $postresult['favicon'];?>" height="100px" width="100px"/><br/>
                            <input type="file" name="favicon" class="form-control">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Copyright Text</label>
                          <div class="col-sm-9">
                            <input type="text" name="copyright" required class="form-control" value="<?php echo $postresult['copyright']; ?>">
                          </div>
                        </div>
						<div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                        </div>
<?php } } else { ?>						
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" required placeholder="Enter Company Name">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Slogan</label>
                          <div class="col-sm-9">
                            <input type="text" name="slogan" class="form-control" required placeholder="Enter Company Slogan">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Upload Logo</label>
                          <div class="col-sm-9" style="text-align:center">
                            <input type="file" name="logo" class="form-control" required>
                          </div>
                        </div>  
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Upload Favicon</label>
                          <div class="col-sm-9" style="text-align:center">
                            <input type="file" name="favicon" class="form-control" required>
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Copyright Text</label>
                          <div class="col-sm-9">
                            <input type="text" name="copyright" required class="form-control" placeholder="Enter Websites' Copyright Text">
                          </div>
                        </div>
						<div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Add</button>
                          </div>
                        </div>
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
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>