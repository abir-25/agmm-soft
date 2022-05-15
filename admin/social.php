<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Social Media</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Basic Site Option</li>    
              <li class="breadcrumb-item active">Social Media</li>
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
		$facebook    = mysqli_real_escape_string($db->link1, $_POST['facebook']);
		$youtube  	 = mysqli_real_escape_string($db->link1, $_POST['youtube']);
		$instagram   = mysqli_real_escape_string($db->link1, $_POST['instagram']); 
		$linkedin    = mysqli_real_escape_string($db->link1, $_POST['linkedin']);
    $twitter     = mysqli_real_escape_string($db->link1, $_POST['twitter']);
		$github  	   = mysqli_real_escape_string($db->link1, $_POST['github']);
		$website     = mysqli_real_escape_string($db->link1, $_POST['website']); 
		$pinterest   = mysqli_real_escape_string($db->link1, $_POST['pinterest']);
		$reddit      = mysqli_real_escape_string($db->link1, $_POST['reddit']);
    $tumblr      = mysqli_real_escape_string($db->link1, $_POST['tumblr']);
		$google_plus = mysqli_real_escape_string($db->link1, $_POST['google_plus']);
		$twitch      = mysqli_real_escape_string($db->link1, $_POST['twitch']); 
		$discord     = mysqli_real_escape_string($db->link1, $_POST['discord']);
		$vimeo       = mysqli_real_escape_string($db->link1, $_POST['vimeo']);

    $query1 = "select * from tbl_social";
		$getpost = $db->num_rows($query1);
		if(!$getpost)
		{
      $query = "INSERT INTO tbl_social(facebook, youtube, instagram, linkedin, twitter, github, website, pinterest, reddit, tumblr, google_plus, twitch, discord, vimeo) VALUES('$facebook','$youtube','$instagram','$linkedin','$twitter','$github','$website','$pinterest','$reddit','$tumblr','$google_plus','$twitch','$discord','$vimeo')";

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
    else
    {
        $query = "UPDATE tbl_social 
        SET 
        facebook    = '$facebook',
        youtube     = '$youtube',
        instagram   = '$instagram',
        linkedin    = '$linkedin',
        twitter     = '$twitter',
        github      = '$github',
        website     = '$website',
        pinterest   = '$pinterest',
        reddit      = '$reddit',
        tumblr      = '$tumblr',
        google_plus = '$google_plus',
        twitch      = '$twitch',
        discord     = '$discord',
        vimeo       = '$vimeo'";

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
	$query1 = "select * from tbl_social";
    $getpost = $db->num_rows($query1);
    if($getpost)
    {
	    $getpost = $db->select($query1);
	    while($postresult = $getpost->fetch_assoc())
	    {
?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Facebook</label>
                          <div class="col-sm-9">
                            <input type="text" name="facebook" class="form-control" value="<?php echo $postresult['facebook']; ?>">
                          </div>
                        </div>
						            <div class="line"></div>
						            <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Youtube</label>
                          <div class="col-sm-9">
                            <input type="text" name="youtube" class="form-control" value="<?php echo $postresult['youtube']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Instagram</label>
                          <div class="col-sm-9">
                            <input type="text" name="instagram" class="form-control" value="<?php echo $postresult['instagram']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Linkedin</label>
                          <div class="col-sm-9">
                            <input type="text" name="linkedin" class="form-control" value="<?php echo $postresult['linkedin']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Twitter</label>
                          <div class="col-sm-9">
                            <input type="text" name="twitter" class="form-control" value="<?php echo $postresult['twitter']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Github</label>
                          <div class="col-sm-9">
                            <input type="text" name="github" class="form-control" value="<?php echo $postresult['github']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Website</label>
                          <div class="col-sm-9">
                            <input type="text" name="website" class="form-control" value="<?php echo $postresult['website']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pinterest</label>
                          <div class="col-sm-9">
                            <input type="text" name="pinterest" class="form-control" value="<?php echo $postresult['pinterest']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Reddit</label>
                          <div class="col-sm-9">
                            <input type="text" name="reddit" class="form-control" value="<?php echo $postresult['reddit']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Tumblr</label>
                          <div class="col-sm-9">
                            <input type="text" name="tumblr" class="form-control" value="<?php echo $postresult['tumblr']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Google Plus</label>
                          <div class="col-sm-9">
                            <input type="text" name="google_plus" class="form-control" value="<?php echo $postresult['google_plus']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Twitch</label>
                          <div class="col-sm-9">
                            <input type="text" name="twitch" class="form-control" value="<?php echo $postresult['twitch']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Discord</label>
                          <div class="col-sm-9">
                            <input type="text" name="discord" class="form-control" value="<?php echo $postresult['discord']; ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Vimeo</label>
                          <div class="col-sm-9">
                            <input type="text" name="vimeo" class="form-control" value="<?php echo $postresult['vimeo']; ?>">
                          </div>
                        </div>  
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                        </div>              				 
<?php } } else { ?>		
  
  <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Facebook</label>
                          <div class="col-sm-9">
                            <input type="text" name="facebook" class="form-control" placeholder="Enter Facebook Id">
                          </div>
                        </div>
						            <div class="line"></div>
						            <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Youtube</label>
                          <div class="col-sm-9">
                            <input type="text" name="youtube" class="form-control" placeholder="Enter Youtube Id">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Instagram</label>
                          <div class="col-sm-9">
                            <input type="text" name="instagram" class="form-control" placeholder="Enter Instagram Id">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Linkedin</label>
                          <div class="col-sm-9">
                            <input type="text" name="linkedin" class="form-control" placeholder="Enter Linkedin Id">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Twitter</label>
                          <div class="col-sm-9">
                            <input type="text" name="twitter" class="form-control" placeholder="Enter Twitter Id">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Github</label>
                          <div class="col-sm-9">
                            <input type="text" name="github" class="form-control" placeholder="Enter Github Id">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Website</label>
                          <div class="col-sm-9">
                            <input type="text" name="website" class="form-control" placeholder="Enter Website Id">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pinterest</label>
                          <div class="col-sm-9">
                            <input type="text" name="pinterest" class="form-control" placeholder="Enter Pinterest Id">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Reddit</label>
                          <div class="col-sm-9">
                            <input type="text" name="reddit" class="form-control" placeholder="Enter Reddit Id">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Tumblr</label>
                          <div class="col-sm-9">
                            <input type="text" name="tumblr" class="form-control" placeholder="Enter Tumblr Id">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Google Plus</label>
                          <div class="col-sm-9">
                            <input type="text" name="google_plus" class="form-control" placeholder="Enter Google Plus Id">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Twitch</label>
                          <div class="col-sm-9">
                            <input type="text" name="twitch" class="form-control" placeholder="Enter Twitch Id">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Discord</label>
                          <div class="col-sm-9">
                            <input type="text" name="discord" class="form-control" placeholder="Enter Discord Id">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Vimeo</label>
                          <div class="col-sm-9">
                            <input type="text" name="vimeo" class="form-control" placeholder="Enter Vimeo Id">
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