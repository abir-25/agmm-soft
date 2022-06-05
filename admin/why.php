<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Why Choose Us</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Basic Site Option</li>
			  <li class="breadcrumb-item active">Why Choose Us</li>
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
    $count=0;

		$title = $fm->validation($_POST['title']);
		$description = $fm->validation($_POST['description']);
		$point1_title = $fm->validation($_POST['point1_title']);
		$point1_desc = $fm->validation($_POST['point1_desc']);
		$point2_title = $fm->validation($_POST['point2_title']);
		$point2_desc = $fm->validation($_POST['point2_desc']);
		$point3_title = $fm->validation($_POST['point3_title']);
		$point3_desc = $fm->validation($_POST['point3_desc']);

    $title = mysqli_real_escape_string($db->link1, $title);
    $description = mysqli_real_escape_string($db->link1, $description);
    $point1_title = mysqli_real_escape_string($db->link1, $point1_title);
    $point1_desc = mysqli_real_escape_string($db->link1, $point1_desc);
    $point2_title = mysqli_real_escape_string($db->link1, $point2_title);
    $point2_desc = mysqli_real_escape_string($db->link1, $point2_desc);
    $point3_title = mysqli_real_escape_string($db->link1, $point3_title);
    $point3_desc = mysqli_real_escape_string($db->link1, $point3_desc);
		 
		$permitted  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_temp = $_FILES['image']['tmp_name'];

		$file_name2 = $_FILES['point1_image']['name'];
		$file_size2 = $_FILES['point1_image']['size'];
		$file_temp2 = $_FILES['point1_image']['tmp_name'];

    $file_name3 = $_FILES['point2_image']['name'];
		$file_size3 = $_FILES['point2_image']['size'];
		$file_temp3 = $_FILES['point2_image']['tmp_name'];

    $file_name4 = $_FILES['point3_image']['name'];
		$file_size4 = $_FILES['point3_image']['size'];
		$file_temp4 = $_FILES['point3_image']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/why/".$unique_image;
	
		$div2 = explode('.', $file_name2);
		$file_ext2 = strtolower(end($div2));
		$unique_image2 = substr(md5(time()), 0, 10).'.'.$file_ext2;
		$uploaded_image2 = "upload/why/".$unique_image2;
	
    $div3 = explode('.', $file_name3);
		$file_ext3 = strtolower(end($div3));
		$unique_image3 = substr(md5(time()), 0, 10).'.'.$file_ext3;
		$uploaded_image3 = "upload/why/".$unique_image3;

    $div4 = explode('.', $file_name4);
		$file_ext4 = strtolower(end($div4));
		$unique_image4 = substr(md5(time()), 0, 10).'.'.$file_ext4;
		$uploaded_image4 = "upload/why/".$unique_image4;
	
        $query1 = "UPDATE tbl_why 
                    SET 
                    title = '$title',
                    description = '$description',
                    point1_title = '$point1_title',
                    point1_desc = '$point1_desc',
                    point2_title = '$point2_title',
                    point2_desc = '$point2_desc',
                    point3_title = '$point3_title',
                    point3_desc = '$point3_desc'";
        
        $updated_rows1 = $db->update($query1);

        if(!empty($file_name))
        {
            move_uploaded_file($file_temp, $uploaded_image);
            if (in_array($file_ext, $permitted) === false) 
            {
                    echo "<span class='error'>You can upload only:-"
                    .implode(', ', $permitted)."</span>";
            } 
            else
            {	
                $query2 = "UPDATE tbl_why 
                            SET 
                            image = '$uploaded_image'";
                
                $updated_rows2 = $db->update($query2);
            }
        }
        if(!empty($file_name2))
        {
	        	move_uploaded_file($file_temp2, $uploaded_image2);
            if (in_array($file_ext2, $permitted) === false) 
            {
                    echo "<span class='error'>You can upload only:-"
                    .implode(', ', $permitted)."</span>";
            } 
            else
            {	
                $query3 = "UPDATE tbl_why 
                            SET 
                            point1_image = '$uploaded_image2'";
                
                $updated_rows3 = $db->update($query3);
            }
        }
        if(!empty($file_name3))
        {
		        move_uploaded_file($file_temp3, $uploaded_image3);
            if (in_array($file_ext3, $permitted) === false) 
            {
                    echo "<span class='error'>You can upload only:-"
                    .implode(', ', $permitted)."</span>";
            } 
            else
            {	
                $query4 = "UPDATE tbl_why 
                            SET 
                            point2_image = '$uploaded_image3'";
                
                $updated_rows4 = $db->update($query4);
            }
        }
        if(!empty($file_name4))
        {
		        move_uploaded_file($file_temp4, $uploaded_image4);
            if (in_array($file_ext4, $permitted) === false) 
            {
                    echo "<span class='error'>You can upload only:-"
                    .implode(', ', $permitted)."</span>";
            } 
            else
            {	
                $query5 = "UPDATE tbl_why 
                            SET 
                            point3_image = '$uploaded_image4'";
                
                $updated_rows5 = $db->update($query5);
            }
        }
		
        if ($updated_rows1 || $updated_rows2 || $updated_rows3 || $updated_rows4 || $updated_rows5) 
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
	$query1 = "select * from tbl_why";
	$getpost = $db->num_rows($query1);
    if($getpost)
    {
	    $getpost = $db->select($query1);
	    while($postresult = $getpost->fetch_assoc())
	    {
?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Title</label>
                          <div class="col-sm-9">
                            <textarea name="title" class="form-control" required style="height:100px"><?php echo $postresult['title']; ?></textarea>
                          </div>
                        </div>
                        <div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Upload Image</label>
                          <div class="col-sm-9" style="text-align:center">
						  <img src="<?php echo $postresult['image'];?>" height="200px"/><br/>
                            <input type="file" name="image" class="form-control">
                          </div>
                        </div> 
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Description</label>
                          <div class="col-sm-9">
                            <textarea name="description" class="form-control" required style="height:200px"><?php echo $postresult['description']; ?></textarea>
                          </div>
                        </div>
                        <div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">First Point image</label>
                          <div class="col-sm-9" style="text-align:center">
						  <img src="<?php echo $postresult['point1_image'];?>" height="60px"/><br/>
                            <input type="file" name="point1_image" class="form-control">
                          </div>
                        </div>  
						<div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">First Point Title</label>
                          <div class="col-sm-9">
                            <input type="text" name="point1_title" class="form-control" required value="<?php echo $postresult['point1_title']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">First Point Description</label>
                          <div class="col-sm-9">
                            <textarea name="point1_desc" class="form-control" required style="height:150px"><?php echo $postresult['point1_desc']; ?></textarea>
                          </div>
                        </div>
                        <div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Second Point image</label>
                          <div class="col-sm-9" style="text-align:center">
						  <img src="<?php echo $postresult['point2_image'];?>" height="60px"/><br/>
                            <input type="file" name="point2_image" class="form-control">
                          </div>
                        </div>  
						<div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Second Point Title</label>
                          <div class="col-sm-9">
                            <input type="text" name="point2_title" class="form-control" required value="<?php echo $postresult['point2_title']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Second Point Description</label>
                          <div class="col-sm-9">
                            <textarea name="point2_desc" class="form-control" required style="height:150px"><?php echo $postresult['point2_desc']; ?></textarea>
                          </div>
                        </div>
                        <div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Third Point image</label>
                          <div class="col-sm-9" style="text-align:center">
						  <img src="<?php echo $postresult['point3_image'];?>" height="60px"/><br/>
                            <input type="file" name="point3_image" class="form-control">
                          </div>
                        </div>  
						<div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Third Point Title</label>
                          <div class="col-sm-9">
                            <input type="text" name="point3_title" class="form-control" required value="<?php echo $postresult['point3_title']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Third Point Description</label>
                          <div class="col-sm-9">
                            <textarea name="point3_desc" class="form-control" required style="height:150px"><?php echo $postresult['point3_desc']; ?></textarea>
                          </div>
                        </div>

						<div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                        </div>
<?php } } ?>						
		
     
                       
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