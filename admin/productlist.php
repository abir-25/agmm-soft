<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
            <div class="content-inner">
                <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">Product List</h2>
                    </div>
                </header>
                <!-- Breadcrumb-->
                <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Product Option</li>
                        <li class="breadcrumb-item active">Product List</li>
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
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Product List</h3>
                                    </div>
                                    <div class="card-body">
<?php

	if(isset($_GET['delid']) && $_GET['delid'] != NULL)
	{
        $delid = $fm->validation($_GET['delid']);
        $delid = mysqli_real_escape_string($db->link1, $delid);
		$query = "select * from tbl_product where id='$delid'"; 
		$getdata = $db->select($query);
		
		if($getdata)
		{
			while($delimg = $getdata->fetch_assoc())
			{
				$dellink = $delimg['image'];
				unlink($dellink);
			}
		}
		
		$delquery = "delete from tbl_product where id = '$delid'";
		$deldata = $db->deletedata($delquery);

        $delquery1 = "delete from tbl_benefit where p_id = '$delid'";
		$deldata1 = $db->deletedata($delquery1);

        $delquery2 = "delete from tbl_module where p_id = '$delid'";
		$deldata2 = $db->deletedata($delquery2);

        $delquery3 = "delete from tbl_module_point where p_id = '$delid'";
		$deldata3 = $db->deletedata($delquery3);
		
		if($deldata && $deldata1 && $deldata2 && $deldata3)
		{
			echo "<script>window.location = 'productlist.php'; </script>";

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
                                                    <th width="10%">Status</th>
                                                    <th width="30%">Description</th>
                                                    <th width="15%">Image</th>
                                                    <th width="20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
	$query = "select * from tbl_product order by id desc";	
    $i = 0;			
	$post = $db->select($query);				
	if($post)
	{
		while($result = $post->fetch_assoc())
		{
			$i++;
            $description = $fm->textShorten($result['description']);
?>
                                                <tr>
                                                    <th scope="row" style="vertical-align:middle"><?php echo $i; ?></th>
                                                    
                                                    <td scope="row" style="vertical-align:middle"><?php echo $result['title']; ?></td>

                                                    <td scope="row" style="vertical-align:middle"><?php if($result['status']=='1') { echo "Completed"; }
                                                    else if($result['status']=='2') { echo "Running"; }
                                                    else if($result['status']=='3') { echo "Upcoming"; }?></td>

                                                    <td scope="row" style="vertical-align:middle"><?php echo $description; ?></td>

                                                    <td style="vertical-align:middle"><img  src="<?php echo $result['image']; ?>" alt="" style="width: 120px;"/></td>
													
													
                                                    <td style="vertical-align:middle"><a class="actionLink" href="editproduct.php?productId=<?php echo $result['id']; ?>">Update</a>  || <a class="actionLink" onclick= "return confirm('Are you sure to Delete This Product?');" href="?delid=<?php echo $result['id'];?>">Delete</a></td>
                                                </tr>
<?php } } ?>
											</tbody>
                                        </table>
<?php if($i==0) { ?>
                                        <p class="text-center py-4">No data Available</p>
<?php } ?>
                                        <a href="addproduct.php" class="btn btn-primary">Add</a>
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
