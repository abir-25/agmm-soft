
    <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            <nav class="side-navbar">
                <!-- Sidebar Header-->
<?php
    $query = "select * from tbl_basic_info";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>
                <div class="sidebar-header d-flex align-items-center">
                    <div class="avatar"><img src="<?php echo $result['logo'];?>" alt="..." class="img-fluid rounded-circle"></div>
                    <div class="title">
                        <h1 class="h4"><?php echo $result['name'];?></h1>
                    </div>
                </div>
<?php } } ?>
                <!-- Sidebar Navidation Menus<span class="heading">Main</span>-->
                <ul class="list-unstyled">
                    <li class="active"><a href="index.php"> <i class="icon-home"></i>Home </a></li>
					<li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-file-text"></i>Basic Site Option</a>
                        <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                            <li><a href="editdashboard.php">Admin Dashboard</a></li>       
                            <li><a href="titlelogo.php">Basic Information</a></li>
                            <li><a href="social.php">Social Media</a></li>
<?php 
    if($_SESSION['role']==0){
?>
                            <li><a href="changepassword.php">Change Password</a></li>
<?php } ?>
                        </ul>
                    </li>
                    
					<li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-user"></i>Editor Option</a>
                        <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
<?php 
    if($_SESSION['role']==0){
?>
                            <li><a href="addeditor.php">Add Editor</a></li>
<?php } ?>
                            <li><a href="editorlist.php">Editor List</a></li>            
                        </ul>
                    </li>

                    <li><a href="#exampledropdownDropdown3" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-users"></i>Team Option</a>
                        <ul id="exampledropdownDropdown3" class="collapse list-unstyled ">
                            <li><a href="addteam.php">Add Team Member </a></li>
                            <li><a href="teamlist.php">Team Members' List</a></li>           
                        </ul>
                    </li>                

                    <li><a href="#exampledropdownDropdown4" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-handshake-o"></i>Client Option</a>
                        <ul id="exampledropdownDropdown4" class="collapse list-unstyled ">
                            <li><a href="addclient.php">Add Client </a></li>
                            <li><a href="clientlist.php">Client List</a></li>           
                        </ul>
                    </li>

                    <li><a href="#exampledropdownDropdown5" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-briefcase"></i>Testimonial Option</a>
                        <ul id="exampledropdownDropdown5" class="collapse list-unstyled ">
                            <li><a href="addtestimonial.php">Add Testimonial </a></li>
                            <li><a href="testimoniallist.php">Testimonial List</a></li>           
                        </ul>
                    </li>
                    
                </ul>

            </nav>