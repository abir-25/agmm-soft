<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="content-inner">
<?php 
    $pp_id = null;
?>
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Add Module Details</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Product Option</li>
			  <li class="breadcrumb-item active">Add Module Details</li>
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
<?php
	if('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['form2'])) {
        $queryy = "select * from tbl_track";			
        $postt = $db->select($queryy);				
        if($postt)
        {
            while($resultt = $postt->fetch_assoc()){
                $p_id = $resultt['p_id'];
            }
        }
        //$m_id  = $_POST['m_id'];
        $m_id = $fm->validation($_POST['m_id']);
        $title = $fm->validation($_POST['title']);
        
        $m_id  = mysqli_real_escape_string($db->link1, $m_id);
        $title  = mysqli_real_escape_string($db->link1, $title);

        $query = "INSERT INTO tbl_module_point(title, p_id, m_id) VALUES('$title','$p_id','$m_id')";
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
                    <form class="form-horizontal" action="" method="post">
                        <input type="hidden" name="form1" value="yes" >
<?php
    if(isset($_POST['p_id'])){
        $pp_id = $_POST['p_id'];
        $query = "UPDATE tbl_track 
                SET 
                p_id = '$pp_id'   
                where id='1'";
    
        $updated_rows = $db->update($query);
    } 
?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Product Name</label>
                          <div class="col-sm-9">
                              <select name="p_id" id="" class="form-control" required  onchange="this.form.submit()">
                                  <option value="">Select Product Name</option>
<?php
	$query = "select * from tbl_product";
	$post = $db->select($query);				
	if($post)
	{
		while($result = $post->fetch_assoc())
		{     
            $p_id = $result['id'];
?>    
                                  <option value="<?php echo $p_id; ?>" <?php if($p_id == $pp_id) {  echo "selected"; } ?>><?php echo $result['title']; ?></option>
<?php } } ?>   
                              </select>
                          </div>
                        </div>
                    </form>

                    <form class="form-horizontal" action="" method="post" name="form">
                        <input type="hidden" name="form2" value="yes" >
						<div class="line"></div>
                    
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Product Module</label>
                          <div class="col-sm-9">
                              <select name="m_id" id="" class="form-control">
                                  <option value="">Select Product Module</option>
<?php
	$query1 = "select * from tbl_module where p_id = '$pp_id'";
	$post1 = $db->select($query1);				
	if($post1)
	{
		while($result1 = $post1->fetch_assoc())
		{     
?>    
                                  <option value="<?php echo $result1['id']; ?>"><?php echo $result1['title']; ?></option>
<?php } } ?>
                              </select>
                          </div>
                        </div>
                    
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Product Module Details</label>
                          <div class="col-sm-9">
                            <textarea name="title" required class="form-control" style="height:200px"
                            placeholder="Enter Module Details"
                            ></textarea>
                          </div>
                        </div>

						<div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <input type="submit" class="btn btn-primary" value="Add"/>
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