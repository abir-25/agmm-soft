<footer class="main-footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
<?php
$query = "select * from tbl_basic_info";
$getData = $db->select($query);
if($getData)
{
	while($result = $getData->fetch_assoc()) 
	{
?>
				&copy; Copyright <strong><span><?php echo $result['name'];?></span></strong>. All Rights Reserved
<?php } } ?> 

			</div>
			<div class="col-sm-4 text-right">
				<p>Developed By <b><a href="#">Agamee-IT</a></b></p>
			</div>
		</div>
	</div>
</footer>