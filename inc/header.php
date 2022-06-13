<?php include 'config/config.php'; ?>
<?php include 'lib/database.php'; ?>
<?php include 'helpers/format.php'; ?>
<?php
	$db = new Database();
	$fm = new Format();

?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta
      content="agmm, agmm soft, products website, agmm company website, agmm website, agmm software firm"
      name="keywords"
    />
    <meta content="AGMM Software Company Website" name="description" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Favicons -->
<?php
    $query = "select * from tbl_basic_info";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?> 
    <link href="admin/<?php echo $result['favicon'];?>" rel="icon" />
<?php } } ?>
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css"/>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="../js/jquery-1.js"></script>

  </head>

  <body> 
    <header id="header">
<?php
    $path = $_SERVER['SCRIPT_FILENAME'];
    $current = basename($path, '.php');
?>
      <div id="topbar">
        <div class="container top-section">
          <div class="marquee-text">
            <a href="">
              <marquee
                behavior="scroll"
                direction="left"
                onmouseover="this.stop();"
                onmouseout="this.start();"
                ><span>**</span>
<?php
    $query = "select * from tbl_news";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?> 
      <?php echo $result['title'];?>
<?php } } ?> 
                <span>**</span></marquee
              >
            </a>
          </div>
          <div class="social-links">
<?php
    $query = "select * from tbl_social";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>     
            <a href="<?php echo $result['twitter']; ?>" class="twitter" target="_blank"><i class="fa fa-twitter"></i>
            </a>
            <a href="<?php echo $result['facebook']; ?>" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="<?php echo $result['instagram']; ?>" class="instagram" target="_blank"
              ><i class="fa fa-instagram"></i
            ></a>
            <a href="<?php echo $result['linkedin']; ?>" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
<?php } } ?>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="logo float-left">
<?php
    $query = "select * from tbl_basic_info";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>
          <h1 class="text-light">
            <a href="index.php#intro" class="scrollto"><b><span><?php echo $result['name'];?></span></b></a>
          </h1>
          <p style="font-size: 13px"><?php echo $result['slogan'];?></p>
<?php } } ?>
          <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
        </div>

        <nav class="main-nav float-right d-none d-lg-block stroke">
          <ul>
            <li><a href="index.php">Home</a></li>
             <!-- <li id="active_link"><a href="about.php">About</a></li> -->
            <li <?php if($current == 'about'){ echo 'id="active_link"'; }?>><a href="about.php">About</a></li>
            <li <?php if($current == 'product'){ echo 'id="active_link"'; }?> class="drop-down">
              <a href="index.php#products">Products</a>
              <ul>
<?php
    $query = "select * from tbl_product";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>
                <li><a href="product.php?proId=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></li>
<?php } } ?>
              </ul>
            </li>
            <li <?php if($current == 'service'){ echo 'id="active_link"'; }?>><a href="index.php#services">Services</a></li>
            <li <?php if($current == 'team'){ echo 'id="active_link"'; }?>><a href="index.php#team">Team</a></li>
            <li <?php if($current == 'technology'){ echo 'id="active_link"'; } else if($current == 'tech-details'){ echo 'id="active_link"'; }?>><a href="technology.php">Technology</a></li>
            <li <?php if($current == 'clients'){ echo 'id="active_link"'; }?>><a href="clients.php">Clients</a></li>
            <li <?php if($current == 'gallery'){ echo 'id="active_link"'; }?>><a href="gallery.php">Gallery</a></li>
            <li><a href="index.php#testimonials">Contact</a></li>
          </ul>
        </nav>
        <!-- .main-nav -->
      </div>
    </header>