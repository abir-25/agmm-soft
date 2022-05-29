<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
            <div class="content-inner">
                <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">Module Details List</h2>
                    </div>
                </header>
                <!-- Breadcrumb-->
                <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Product Option</li>
                        <li class="breadcrumb-item active">Module Details List</li>
                    </ul>
                </div>

                <section class="tables">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><!--<i class="fa fa-ellipsis-v"></i>--></button>
                                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Module Details List</h3>
                                    </div>
                                    <div class="card-body">
<?php

	if(isset($_GET['delid']))
	{
		$delid = $_GET['delid'];
		
		$delquery = "delete from tbl_module_point where id = '$delid'";
		$deldata = $db->deletedata($delquery);
		
		if($deldata)
		{
			echo "<script>window.location = 'modulepointlist.php'; </script>";
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
                                                    <th width="20%">Product Name</th>
                                                    <th width="25%">Product Module</th>
                                                    <th width="27%">Module Details</th>
                                                    <th width="20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
	$query = "select * from tbl_module_point order by id desc";
    $i = 0;	
	$post = $db->select($query);				
	if($post)
	{
		while($result = $post->fetch_assoc())
		{
			$i++;
            $p_id = $result["p_id"];
            $m_id = $result["m_id"];

            $query1 = "select * from tbl_product where id = '$p_id'";				
            $post1 = $db->select($query1);				
            if($post1)
            {
                while($result1 = $post1->fetch_assoc())
                {
                        $p_title = $result1["title"];
                }
            }

            $query1 = "select * from tbl_module where id = '$m_id'";				
            $post1 = $db->select($query1);				
            if($post1)
            {
                while($result1 = $post1->fetch_assoc())
                {
                        $m_title = $result1["title"];
                }
            }
?>
                                                <tr>
                                                    <th scope="row" style="vertical-align:middle"><?php echo $i; ?></th>
                                                    
                                                    <td scope="row" style="vertical-align:middle"><?php echo $p_title; ?></td>

                                                    <td scope="row" style="vertical-align:middle"><?php echo $m_title; ?></td>

                                                    <td scope="row" style="vertical-align:middle"><?php echo $result['title']; ?></td>
													
                                                    <td style="vertical-align:middle"><a class="actionLink" href="editmodulepoint.php?m_detailsId=<?php echo $result['id']; ?>">Update</a>  || <a class="actionLink" onclick= "return confirm('Are you sure to Delete This Module Detail?');" href="?delid=<?php echo $result['id'];?>">Delete</a></td>
                                                </tr>
<?php } } ?>
											</tbody>
                                        </table>
<?php if($i==0) { ?>
                                        <p class="text-center py-4">No data Available</p>
<?php } ?>
                                        <a href="addmodulepoint.php" class="btn btn-primary">Add</a>
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
