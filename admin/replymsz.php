<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Forms</h2>
            </div>
          </header>
<?php
	if(!isset($_GET['msgid']) || ($_GET['msgid'] == NULL))
	{
		echo "<script>window.location = 'inbox.php'; </script>";
	}
	else
	{
    $msgid = $fm->validation($_GET['msgid']);
    $id = mysqli_real_escape_string($db->link1, $msgid);
	}
?>

          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Forms            </li>
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
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><!--<a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>--></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                    <h3 class="h4">Reply Message</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$to      = $fm->validation($_POST['to']);
		$from    = $fm->validation($_POST['from']);
		$subject = $fm->validation($_POST['subject']);
		$message = $fm->validation($_POST['message']);

		$to  = mysqli_real_escape_string($db->link1, $to);
		$from  = mysqli_real_escape_string($db->link1, $from);
		$subject  = mysqli_real_escape_string($db->link1, $subject);
		$message  = mysqli_real_escape_string($db->link1, $message);

		$sendmail = mail($to, $subject, $message, $from);
		
		if($sendmail)
		{
			echo "<span class='success'>Message Sent Successfully !!</span>";
		}
		else
		{
			echo "<span class='error'>ERROR!! Something went wrong.</span>";
		}
	}
?>

<?php
	$query1 = "select * from tbl_contact where id='$id'";
	$getpost = $db->select($query1);
	
	while($postresult = $getpost->fetch_assoc())
	{
?>	
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">To</label>
                          <div class="col-sm-9">
                            <input type="text" name="to" class="form-control" value="<?php echo $postresult['email']; ?>">
                          </div>
                        </div>
						<div class="line"></div>
 <?php } ?> 					
						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">From</label>
                          <div class="col-sm-9">
                            <input type="text" name="from" class="form-control" placeholder="Enter Your Email Address">
                          </div>
                        </div>
						<div class="line"></div>

						<div class="form-group row">
                          <label class="col-sm-3 form-control-label">Subject</label>
                          <div class="col-sm-9">
                            <input type="text" name="subject" class="form-control" Placeholder="Enter Your Subject">
                          </div>
                        </div>
						
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Message</label>
                          <div class="col-sm-9">
                            <textarea name="message" id="" cols="30" rows="10" class="form-control" Placeholder="Enter Your Message"></textarea>
                          </div>
                        </div>
                        
                     
                        
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Reply</button>
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