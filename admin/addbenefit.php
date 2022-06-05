<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Add Product Benefit</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Product Option</li>
			  <li class="breadcrumb-item active">Add Product Benefit</li>
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
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><!--<i class="fa fa-ellipsis-v"></i>--></button>
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
    $p_id = $fm->validation($_POST['p_id']);
    $title = $fm->validation($_POST['title']);
    $description = $fm->validation($_POST['description']);

		$p_id  = mysqli_real_escape_string($db->link1, $p_id);
		$title  = mysqli_real_escape_string($db->link1, $title);
    $description  = mysqli_real_escape_string($db->link1, $description);

        $query = "INSERT INTO tbl_benefit(title, description, p_id) VALUES('$title','$description','$p_id')";
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
?>

                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Product Name</label>
                          <div class="col-sm-9">
                              <select name="p_id" id="" class="form-control" required>
                                  <option value="">Select Product Name</option>
<?php
	$query = "select * from tbl_product";
	$post = $db->select($query);				
	if($post)
	{
		while($result = $post->fetch_assoc())
		{     
?>    
                                  <option value="<?php echo $result['id']; ?>"><?php echo $result['title']; ?></option>
<?php } } ?>
                              </select>
                          </div>
                        </div>
            <div class="line"></div>                      
<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Benefit Title</label>
                          <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" required placeholder="Enter Product Benefit Title">
                          </div>
                        </div>            
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Benefit Details</label>
                          <div class="col-sm-9">
                            
                            <textarea name="description" required class="form-control" style="height:200px"
                            placeholder="Enter Product Benefit Details"
                            ></textarea>
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