<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Counter Section</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Basic Site Option</li>    
              <li class="breadcrumb-item active">Counter Section</li>
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
        $title1 = $fm->validation($_POST['title1']);
        $title2 = $fm->validation($_POST['title2']);
        $title3 = $fm->validation($_POST['title3']);
        $title4 = $fm->validation($_POST['title4']);

        $count1 = $fm->validation($_POST['count1']);
        $count2 = $fm->validation($_POST['count2']);
        $count3 = $fm->validation($_POST['count3']);
        $count4 = $fm->validation($_POST['count4']);


        $title1  = mysqli_real_escape_string($db->link1, $title1);
        $title2  = mysqli_real_escape_string($db->link1, $title2);
        $title3  = mysqli_real_escape_string($db->link1, $title3); 
        $title4  = mysqli_real_escape_string($db->link1, $title4); 

        $count1  = mysqli_real_escape_string($db->link1, $count1);
        $count2  = mysqli_real_escape_string($db->link1, $count2);
        $count3  = mysqli_real_escape_string($db->link1, $count3);
        $count4  = mysqli_real_escape_string($db->link1, $count4);
            
        $query = "UPDATE tbl_counter 
                    SET 
                    title1    = '$title1',
                    title2     = '$title2',
                    title3   = '$title3',
                    title4   = '$title4',
                    count1    = '$count1',
                    count2     = '$count2',
                    count3      = '$count3',
                    count4      = '$count4'";

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
	$query1 = "select * from tbl_counter";
    $getpost = $db->num_rows($query1);
    if($getpost)
    {
	    $getpost = $db->select($query1);
	    while($postresult = $getpost->fetch_assoc())
	    {
?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">First Title</label>
                          <div class="col-sm-9">
                            <input type="text" name="title1" class="form-control" value="<?php echo $postresult['title1']; ?>">
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">First Counter</label>
                          <div class="col-sm-9">
                            <input type="text" name="count1" class="form-control" value="<?php echo $postresult['count1']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Second Title</label>
                          <div class="col-sm-9">
                            <input type="text" name="title2" class="form-control" value="<?php echo $postresult['title2']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Second Counter</label>
                          <div class="col-sm-9">
                            <input type="text" name="count2" class="form-control" value="<?php echo $postresult['count2']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Third Title</label>
                          <div class="col-sm-9">
                            <input type="text" name="title3" class="form-control" value="<?php echo $postresult['title3']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Third Counter</label>
                          <div class="col-sm-9">
                            <input type="text" name="count3" class="form-control" value="<?php echo $postresult['count3']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Four Title</label>
                          <div class="col-sm-9">
                            <input type="text" name="title4" class="form-control" value="<?php echo $postresult['title4']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Four Counter</label>
                          <div class="col-sm-9">
                            <input type="text" name="count4" class="form-control" value="<?php echo $postresult['count4']; ?>">
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