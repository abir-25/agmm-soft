<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
            <div class="content-inner">
                <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">Editor List</h2>
                    </div>
                </header>
                <!-- Breadcrumb-->
                <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Editor Option</li>
                        <li class="breadcrumb-item active">Editor List</li>
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
                                        <h3 class="h4">Editor List</h3>
                                    </div>
                                    <div class="card-body">
<?php

	if(isset($_GET['delid']))
	{
		$delid = $_GET['delid'];
		
		$delquery = "delete from tbl_login where id = '$delid'";
		$deldata = $db->deletedata($delquery);
		
		if($deldata)
		{
			echo "<span class='success'>Data Deleted Successfully.
								</span>";
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
                                                    <th width="15%">No.</th>
                                                    <th width="20%">Name</th>
                                                    <th width="30%">Email</th>
                                                    <th width="17%">Password</th>
                                                    <th width="18%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
	$query = "select * from tbl_login where role='1' order by id asc ";
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
                                          

                                                    <td scope="row" style="vertical-align:middle"><?php echo $result['name']; ?></td>

                                                    <td scope="row" style="vertical-align:middle"><?php echo $result['email']; ?></td>

<?php 
    if($result['email'] == $_SESSION['user'] || $_SESSION['role'] == 0)
    {
?>
                                                    <td scope="row" style="vertical-align:middle"><?php echo $result['password']; ?></td>
<?php } else { ?>
                                                    <td scope="row" style="vertical-align:middle">.......</td>
<?php } ?>
                                                    <td style="vertical-align:middle"><a class="actionLink" href="editeditor.php?editorId=<?php echo $result['id']; ?>">Update</a>
<?php 
    if($_SESSION['role'] == 0)
    {
?>
                                                    || <a class="actionLink" onclick= "return confirm('Are you sure to Delete This Editor?');" href="?delid=<?php echo $result['id'];?>">Delete</a>
<?php } ?>    
                                                </td>
                                                </tr>
<?php } } ?>
											</tbody>
                                        </table>
<?php if($i==0) { ?>
                                        <p class="text-center py-4">No data Available</p>
<?php } ?>
<?php 
    if($_SESSION['role'] == 0)
    {
?>
                                        <a href="addeditor.php" class="btn btn-primary">Add</a>
<?php } ?>
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
