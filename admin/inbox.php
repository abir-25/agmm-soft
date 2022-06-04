<?php include "inc/header.php"; ?>
<?php include "inc/sidebar.php"; ?>
            <div class="content-inner">
                <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">Inbox</h2>
                    </div>
                </header>
                <!-- Breadcrumb-->
                <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Inbox</li>
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
                                        <h3 class="h4">Inbox Table</h3>
                                    </div>
                                    <div class="card-body card-body2">
<?php
	if(isset($_GET['delid']))
	{
		$delid = $_GET['delid']; 
		$delquery = "delete from tbl_contact where id='$delid'";
		$deldata = $db->deletedata($delquery);
		
		if($deldata)
		{
		    echo "<script>window.location = 'inbox.php'; </script>";
		}
		else
		{
			echo "<span class='error'>Message Not Deleted !!</span>";
		}
	}	
?>
<?php

	if(isset($_GET['seenid']))
	{
		$seenid = $_GET['seenid'];
		$query = "UPDATE tbl_contact SET status='1' WHERE id='$seenid'";
		$update_row = $db->update($query);
		if($update_row)
		{
		    echo "<script>window.location = 'inbox.php'; </script>";
		}
		else
		{
			echo "<span class='error'>ERROR!! Something went wrong.</span>";
		}
	}
	
?>

				
<?php

	if(isset($_GET['unseenid']))
	{
		$unseenid = $_GET['unseenid'];
		$query = "UPDATE tbl_contact SET status='0' WHERE id='$unseenid'";
		$update_row = $db->update($query);
		if($update_row)
		{
		    echo "<script>window.location = 'inbox.php'; </script>";
		}
		else
		{
			echo "<span class='error'>ERROR!! Something went wrong.</span>";
		}
	}
	
?>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th width="8%">No.</th>
													<th width="18%">Name</th>
													
													<th width="24%">Email</th>
													<th width="30%">Message</th>
													<th width="20%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php		
$query = "select * from tbl_contact where status='0' order by id desc";
$msg = $db->select($query);

if($msg)
{
	$i=0;
	while($result = $msg->fetch_assoc())
	{
		$i++;
?>
                        <tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $result['name']; ?></td>
							<td><?php echo $result['email']; ?></td>
							<td><?php echo $fm->textShorten($result['message'], 100); ?></td>
							<td>
								<a class="actionLink" href="viewmsz.php?msgid=<?php echo $result['id']; ?>">View</a> || <a class="actionLink" href="replymsz.php?msgid=<?php echo $result['id']; ?>">Reply</a> ||
								<a class="actionLink" onclick= "return confirm('Are you sure to Move this Message to Seen Box?');" href="?seenid=<?php echo $result['id']; ?>">Seen</a>
							</td>
						</tr>
<?php } } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
							
							
							
							<div class="col-md-12">
                                <div class="card">
                                    <div class="card-close">
                                        <div class="dropdown">
                                            <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                                            <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a></div>
                                        </div>
                                    </div>
                                    <div class="card-header d-flex align-items-center">
                                        <h3 class="h4">Seen Box Table</h3>
                                    </div>
                                    <div class="card-body card-body2">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th width="8%">No.</th>
													<th width="15%">Name</th>
													<th width="20%">Email</th>
													<th width="32%">Message</th>
													<th width="25%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php		
$query = "select * from tbl_contact where status='1' order by id desc";
$i=0;
$msg = $db->select($query);
if($msg)
{
	while($result = $msg->fetch_assoc())
	{
		$i++;
?>
                        <tr>
                            <td><?php echo $i; ?></td>
							<td><?php echo $result['name']; ?></td>
							<td><?php echo $result['email']; ?></td>
							<td><?php echo $fm->textShorten($result['message'], 100); ?></td>
							<td>
								<a class="actionLink" href="viewmsz.php?msgid=<?php echo $result['id']; ?>">View</a> ||
								<a class="actionLink" onclick= "return confirm('Are you sure to Unseen this Message?');" href="?unseenid=<?php echo $result['id']; ?>">Unseen</a> ||
								<a class="actionLink" onclick= "return confirm('Are you sure to Delete this Message?');" href="?delid=<?php echo $result['id']; ?>">Delete</a>
							</td>
                        </tr>
<?php } } ?>
                                            </tbody>
                                        </table>
<?php if($i==0) { ?>
                                        <p class="text-center py-4">No data Available</p>
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
