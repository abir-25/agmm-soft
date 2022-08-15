<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
            <div class="content-inner">
                <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">Testimonial List</h2>
                    </div>
                </header>
                <!-- Breadcrumb-->
                <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Testimonial Option</li>
                        <li class="breadcrumb-item active">Testimonial List</li>
                    </ul>
                </div>

                <section class="tables">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"></button>
                                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex flex-column align-items-start">
                                        <h3 class="h4">Testimonial List</h3>
                                        <p class="p-0 m-0 mt-2" style="color: #222; font-size: 15px">Priority must be started from <span style="color: #796aee; font-size: 18px"><b>1</b></span> will be counted to sort your clients data into your website.</p>
                                        <span style="color: #333; font-size: 14px">Client of priority <span style="color: #796aee;"><b>1</b></span> will be displayed at first position, Client of priority <span style="color: #796aee;"><b>2</b></span> will be displayed at second position and so on.</span>
                                        <span style="color: #333; font-size: 14px">Client of priority <span style="color: #796aee;"><b>0</b></span> will be displayed at last position. So the clients you want to show last, set their priority to <span style="color: #796aee;"><b>0</b></span>.</span>
                                    </div>
                                    <div class="card-body">
<?php

	if(isset($_GET['delid']) && $_GET['delid'] != NULL)
	{
		$delid = $fm->validation($_GET['delid']);
        $delid = mysqli_real_escape_string($db->link1, $delid);
        
		$query = "select * from tbl_testimonial where id='$delid'"; 
		$getdata = $db->select($query);
		
		if($getdata)
		{
			while($delimg = $getdata->fetch_assoc())
			{
				$dellink = $delimg['logo'];
				unlink($dellink);
			}
		}
		
		$delquery = "delete from tbl_testimonial where id = '$delid'";
		$deldata = $db->deletedata($delquery);
		
		if($deldata)
		{
			echo "<script>window.location = 'testimoniallist.php'; </script>";

		}
		else
		{
			echo "<span class='error'>Data Not Deleted !!</span>";
		}
	}
?>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th width="8%">No.</th>
                                                    <th width="17%">Product</th>
                                                    <th width="17%">Service</th>
                                                    <th width="16%">Client</th>
                                                    <th width="14%">Logo</th>
                                                    <th width="10%">Priority</th>
                                                    <th width="18%" align="center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
	$query = "select * from tbl_testimonial order by id desc";	
    $i = 0;			
	$post = $db->select($query);				
	if($post)
	{
		while($result = $post->fetch_assoc())
		{
			$i++;
?>
                                                <tr>
                                                    <th scope="row" style="vertical-align:middle"><?php echo $i; ?></th>
                                                    
                                                    <td scope="row" style="vertical-align:middle"><?php echo $result['product'];; ?></td>

                                                    <td scope="row" style="vertical-align:middle"><?php echo $result['service'];; ?></td>

                                                    <td scope="row" style="vertical-align:middle"><?php echo $result['client'];; ?></td>

                                                    <td style="vertical-align:middle"><img  src="<?php echo $result['logo']; ?>" alt="" style="height: 75px;"/></td>
													
													<td align="center" scope="row" style="vertical-align:middle"><?php echo $result['priority'];; ?></td>
                                                    <td style="vertical-align:middle"><a class="actionLink" href="edittestimonial.php?testId=<?php echo $result['id']; ?>">Update</a>  || <a class="actionLink" onclick= "return confirm('Are you sure to Delete This Testimonial?');" href="?delid=<?php echo $result['id'];?>">Delete</a></td>
                                                </tr>
<?php } } ?>
											</tbody>
                                        </table>
<?php if($i==0) { ?>
                                        <p class="text-center py-4">No data Available</p>
<?php } ?>
                                        <a href="addtestimonial.php" class="btn btn-primary">Add</a>
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
