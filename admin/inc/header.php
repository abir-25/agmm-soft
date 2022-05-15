<?php
session_cache_limiter(FALSE); 
session_start();
if($_SESSION['login']==false){
	header("Location:login.php");
}
?>
<?php include '../config/config.php'; ?>
<?php include '../lib/database.php'; ?>
<?php include '../helpers/format.php'; ?>
<?php
	$db = new Database();
	$fm = new Format();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php
    $query = "select * from tbl_basic_info";
    $getData = $db->num_rows($query);
    if($getData)
    {
      $getData1 = $db->select($query);
      while($result = $getData1->fetch_assoc()) 
      {
?>
    <title><?php echo $result['nickname'];?>-Admin</title>
    <link rel="shortcut icon" href="<?php echo $result['favicon'];?>">
<?php } } ?>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->

</head>

<body>
    <div class="page">
        <!-- Main Navbar-->
        <header class="header">
            <nav class="navbar">
                <!-- Search Box-->
                <div class="search-box">
                    <button class="dismiss"><i class="icon-close"></i></button>
                    <form id="searchForm" action="#" role="search">
                        <input type="search" placeholder="What are you looking for..." class="form-control">
                    </form>
                </div>
                <div class="container-fluid">
                    <div class="navbar-holder d-flex align-items-center justify-content-between">
                        <!-- Navbar Header-->
                        <div class="navbar-header">
                            <!-- Navbar Brand -->
                            <a href="index.php" class="navbar-brand">
<?php
    $query = "select * from tbl_basic_info";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>
                                <div class="brand-text brand-big"><span><?php echo $result['name'];?></span></div>
                                <div class="brand-text brand-small"><strong><?php echo $result['name'];?></strong></div>
<?php } } ?>
                            </a>
                            <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
                        </div>
                        <!-- Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                           
                            <!-- Messages
							-->
<?php
		$query = "select count(id) as countId from tbl_contact where status=0";
		$getData = $db->select($query);
		if($getData)
		{
			while($result = $getData->fetch_assoc()) 
			{
				$countId = $result['countId'];
			}
		}
?>
                            <li class="nav-item dropdown"> <a id="messages" rel="nofollow" href="inbox.php" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange"><?php echo $countId; ?></span></a>
                            </li>
                            <!-- Logout    -->
                            <li class="nav-item"><a href="logout.php" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>