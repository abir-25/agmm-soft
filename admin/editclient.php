<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Edit Client</h2>
            </div>
          </header>
<?php
	if(!isset($_GET['clientId']) || $_GET['clientId'] == NULL)
	{
		echo "<script>window.location = 'clientlist.php'; </script>";
	}
	else
	{
		$clientId = $_GET['clientId'];
	}
?>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Client Option</li>  
              <li class="breadcrumb-item active">Edit Client</li>
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
                      <h3 class="h4">Edit Information</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
        $name  = mysqli_real_escape_string($db->link1, $_POST['name']);
		$topic_id  = mysqli_real_escape_string($db->link1, $_POST['topic_id']);

		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $_FILES['logo']['name'];
		$file_size = $_FILES['logo']['size'];
		$file_temp = $_FILES['logo']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/client/".$unique_image;
	
		if(!empty($file_name))
        {
            if (in_array($file_ext, $permited) === false) 
            {
                echo "<span class='error'>Error...You can upload only:-".implode(', ', $permited)."</span>";
            } 
            else
            {	
                move_uploaded_file($file_temp, $uploaded_image);
                $query = "UPDATE tbl_client 
                        SET 
                        name = '$name',
                        topic_id = '$topic_id',
                        logo = '$uploaded_image'   
                        where id='$clientId'";
            
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
        else
        {
            $query = "UPDATE tbl_client 
                        SET 
                        name = '$name',
                        topic_id = '$topic_id'       
                        where id='$clientId'";
            
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
?>
<?php
	$query1 = "select * from tbl_client where id='$clientId'";
	    $getpost = $db->select($query1);
      if($getpost)
      {
	      while($postresult = $getpost->fetch_assoc())
	      {
?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Client Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" required value="<?php echo $postresult['name'];?>">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Topic</label>
                          <div class="col-sm-9">
                          <select name="topic_id" id="" class="form-control" required>
                                  <option value="">Select skill type</option>
<?php
	$query2 = "select * from tbl_topic";
	$getpost2 = $db->select($query2);
      if($getpost2)
      {
	      while($postresult1 = $getpost2->fetch_assoc())
	      {
?>
                              
                                  <option value="<?php echo $postresult1["id"]; ?>" <?php if($postresult1['id'] == $postresult['topic_id']) {  echo "selected"; } ?>><?php echo $postresult1["title"]; ?></option>
<?php } } ?>
                                </select>
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Upload Client Logo</label>
                          <div class="col-sm-9" style="text-align:center">
						              <img src="<?php echo $postresult['logo'];?>" width="150px"/><br/>
                            <input type="file" name="logo" class="form-control">
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
