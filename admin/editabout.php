<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">About Us</h2>
            </div>
          </header>

          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Basic Site Option</li>  
              <li class="breadcrumb-item active">About Us</li>
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
    $overview1  = mysqli_real_escape_string($db->link1, $_POST['overview1']);
    $overview2  = mysqli_real_escape_string($db->link1, $_POST['overview2']);
    $overview3  = mysqli_real_escape_string($db->link1, $_POST['overview3']);
    $mission  = mysqli_real_escape_string($db->link1, $_POST['mission']);
    $vision  = mysqli_real_escape_string($db->link1, $_POST['vision']);

		$permited  = array('jpg', 'jpeg', 'png', 'gif');
		$file_name = $_FILES['image']['name'];
		$file_size = $_FILES['image']['size'];
		$file_temp = $_FILES['image']['tmp_name'];

		$div = explode('.', $file_name);
		$file_ext = strtolower(end($div));
		$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
		$uploaded_image = "upload/about/".$unique_image;
	
		if(!empty($file_name))
        {
            if (in_array($file_ext, $permited) === false) 
            {
                echo "<span class='error'>Error...You can upload only:-".implode(', ', $permited)."</span>";
            } 
            else
            {	
                move_uploaded_file($file_temp, $uploaded_image);
                $query = "UPDATE tbl_about 
                        SET 
                        overview1 = '$overview1',
                        overview2 = '$overview2',
                        overview3 = '$overview3',
                        mission = '$mission',
                        vision = '$vision',
                        image = '$uploaded_image'";
            
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
            $query = "UPDATE tbl_about 
                        SET 
                        overview1 = '$overview1',
                        overview2 = '$overview2',
                        overview3 = '$overview3',
                        mission = '$mission',
                        vision = '$vision'";
            
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
	$query1 = "select * from tbl_about";
	    $getpost = $db->select($query1);
      if($getpost)
      {
	      while($postresult = $getpost->fetch_assoc())
	      {
?>

						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Overview Part-1</label>
                          <div class="col-sm-9">
                          <textarea name="overview1" required class="form-control" style="height:200px"><?php echo $postresult['overview1'];?>
                            </textarea>
                          </div>
            </div>			
            <div class="line"></div>
            <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Overview Part-2</label>
                          <div class="col-sm-9">
                           <textarea name="overview2" required class="form-control" style="height:200px"><?php echo $postresult['overview2'];?>
                            </textarea>
                          </div>
            </div>			
            <div class="line"></div>
            <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Overview Part-3</label>
                          <div class="col-sm-9">
                           <textarea name="overview3" required class="form-control" style="height:200px"><?php echo $postresult['overview3'];?>
                            </textarea>
                          </div>
            </div>			
            <div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Mission</label>
                          <div class="col-sm-9">
                          <textarea name="mission" required class="form-control" style="height:200px"><?php echo $postresult['mission'];?>
                            </textarea>
                          </div>
                        </div>
           <div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Vision</label>
                          <div class="col-sm-9">
                          <textarea name="vision" required class="form-control" style="height:200px"><?php echo $postresult['vision'];?>
                            </textarea>
                          </div>
                        </div>
						<div class="line"></div>
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Upload About Image</label>
                          <div class="col-sm-9" style="text-align:center">
						<img src="<?php echo $postresult['image'];?>" width="180px"/><br/>
                            <input type="file" name="image" class="form-control">
                          </div>
                        </div>
						  
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
    <script type="text/javascript" src="vendor/tinymce/tinymce.min.js"></script>
    <script>
      tinymce.init({
      selector: 'textarea#editor', 
      auto_focus: 'element1',
      height: "200"
	    });
      
      $( document ).ready(function() {
        $('#buttonpost').on("click", function(){
          tinyMCE.triggerSave();
          var value = $("textarea#editor").val();		
          $("#display-post").html(value);
          $(".texteditor-container").hide();
          return false;
        });
      });   
    </script>
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
