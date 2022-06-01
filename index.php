<?php include 'config/config.php'; ?>
<?php include 'lib/database.php'; ?>
<?php include 'helpers/format.php'; ?>
<?php
	$db = new Database();
	$fm = new Format();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AGMM Soft</title>
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta
      content="agmm, agmm soft, products website, agmm company website, agmm website, agmm software firm"
      name="keywords"
    />
    <meta content="AGMM Software Company Website" name="description" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon" />
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
  </head>

  <body> 
    <!--==========================
    Header
    ============================-->
    <header id="header">
      <div id="topbar">
        <div class="container top-section">
          <div class="marquee-text">
            <a href="">
              <marquee
                behavior="scroll"
                direction="left"
                onmouseover="this.stop();"
                onmouseout="this.start();"
                ><span>**</span> But I must explain to you how all this mistaken
                idea of denouncing pleasure and praising pain was born and I
                will give you a complete account of the system
                <span>**</span></marquee
              >
            </a>
          </div>
          <div class="social-links">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
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
            <li class="active"><a href="#intro">Home</a></li>
            <li><a href="#about">About</a></li>
            <li class="drop-down">
              <a href="#products">Products</a>
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
            <li><a href="#services">Services</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="technology.php">Technology</a></li>
            <li><a href="clients.php">Clients</a></li>
            <li><a href="">Gallery</a></li>
            <li><a href="#testimonials">Contact</a></li>
          </ul>
        </nav>
        <!-- .main-nav -->
      </div>
    </header>
    <!-- #header -->

    <!--==========================
    Intro Section
    ============================-->
    <section id="intro" class="clearfix">
      <div class="container d-flex h-100">
        <div
          class="row justify-content-center align-self-center banner-section"
        >
          <div class="col-md-6 intro-info order-md-first order-last">
            <h2 class="banner-title">AGMM SOFT Solutions for Your</h2>
            <div class="word-carousel">
              <div>
                <ul class="moving-words">
                  <li>Business</li>
                  <li>Growth</li>
                  <li>Development</li>
                </ul>
              </div>
            </div>
            <div class="get-started-btn-div">
              <a
                href="#pricing"
                class="btn-get-started scrollto custom-btn btn-16"
                >Get Started</a
              >
            </div>
          </div>

          <div class="col-md-6 intro-img order-md-last order-first">
            <img src="img/intro-img.svg" alt="" class="img-fluid" />
          </div>
        </div>
        <div class="animate-particle">
          <ul>
            <li><img src="img/element/3.png" alt="" class="image-1" /></li>
            <li><img src="img/element/2.png" alt="" /></li>
            <li><img src="img/element/1.png" alt="" /></li>
            <li><img src="img/element/4.png" alt="" /></li>
            <li><img src="img/element/5.png" alt="" /></li>
            <li><img src="img/element/6.png" alt="" /></li>
            <li><img src="img/element/7.png" alt="" /></li>
          </ul>
        </div>
      </div>
    </section>

    <!-- #intro -->

    <main id="main">
      <!--==========================
      About Us Section
    ============================-->
      <section id="about">
        <div class="container">
<?php
    $query = "select * from tbl_about";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>
          <div class="row">
  
            <div class="col-lg-5 col-md-6">
              <div class="about-img">
                <img src="admin/<?php echo $result['image']; ?>" alt="" />
              </div>
            </div>

            <div class="col-lg-7 col-md-6 about-div">
              <div class="about-content">
                <h2>About Us</h2>
                <p class="about_overview">
                  <?php echo $result['overview1']; ?>
                  <!-- <?php //echo $fm->textShorten($result['overview']); ?> -->
                </p>
                <div class="mission-vision-div">
                  <div class="about-mission-img-div">
                    <img
                      class="mission-img"
                      src="img/about/mission.png"
                      alt=""
                    />
                  </div>
                  <p>
                    <?php echo $result['mission']; ?>
                  </p>
                </div>
                <div class="mission-vision-div">
                  <div class="about-mission-img-div">
                    <img class="vision-img" src="img/about/vision.png" alt="" />
                  </div>
                  <p>
                    <?php echo $result['vision']; ?>
                  </p>
                </div>
              </div>
              <div class="get-started-btn-div">
                <a
                  href="about.php"
                  class="btn-get-started scrollto custom-btn btn-16"
                  >More Details</a
                >
              </div>
            </div>
          </div>
<?php } } ?>
        </div>
      </section>
      <!-- #about -->

      <!--==========================
      products Section
    ============================-->
      <section id="products" class="section-bg">
        <div class="container">
          <header class="section-header">
            <h3 class="section-title">Our products</h3>
          </header>

          <div class="row">
            <div class="col-lg-12">
              <ul id="products-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Completed</li>
                <li data-filter=".filter-card">Running</li>
                <li data-filter=".filter-web">Upcoming</li>
              </ul>
            </div>
          </div>

          <div class="row products-container">

<?php
    $query = "select * from tbl_product";
    $getData = $db->select($query);
    if($getData)
    {
      $wow_delay = 0;
        while($result = $getData->fetch_assoc()) 
        {
          $wow_delay = 0+0.1;
?>

            <div class="col-lg-4 col-md-6 products-item <?php if($result['status']=='1'){ echo 'filter-app'; } else if($result['status']=='2'){ echo 'filter-card'; } else if($result['status']=='3'){ echo 'filter-web'; }?>" data-wow-delay="<?php echo $wow_delay;?>s">
              <div class="products-wrap">
                <img src="admin/<?php echo $result['image']; ?>" class="img-fluid" alt="" />
                <div class="products-info">
                  <h4><a href="product.php?proId=<?php echo $result['id']; ?>"><?php echo $result['title']; ?></a></h4>

                  <div>
                    <!-- <a
                      href=""
                      data-lightbox="products"
                      data-title="App 1"
                      class="link-preview"
                      title="Preview"
                      ><i class="ion ion-eye"></i
                    ></a> -->
                    <a href="product.php?proId=<?php echo $result['id']; ?>" class="link-details" title="More Details"
                      ><i class="ion ion-eye"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
<?php  } } ?>
            
          </div>
        </div>
      </section>
      <!-- #products -->

      <!--==========================
      Services Section
    ============================-->
      <section id="services" class="section-bg">
        <div class="container">
          <header class="section-header">
            <h3>Services</h3>
            <p>Services we provide to our awesome clients</p>
          </header>

          <div class="row">
            <div
              class="col-md-6 col-lg-4 wow bounceInUp"
              data-wow-duration="1.4s"
            >
              <div class="box">
                <div class="icon" style="background: #fceef3">
                  <i
                    class="ion-ios-analytics-outline"
                    style="color: #ff689b"
                  ></i>
                </div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p class="description">
                  Voluptatum deleniti atque corrupti quos dolores et quas
                  molestias excepturi sint occaecati cupiditate non provident
                </p>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-4 wow bounceInUp"
              data-wow-duration="1.4s"
            >
              <div class="box">
                <div class="icon" style="background: #fff0da">
                  <i
                    class="ion-ios-bookmarks-outline"
                    style="color: #e98e06"
                  ></i>
                </div>
                <h4 class="title"><a href="">Dolor Sitema</a></h4>
                <p class="description">
                  Minim veniam, quis nostrud exercitation ullamco laboris nisi
                  ut aliquip ex ea commodo consequat tarad limino ata
                </p>
              </div>
            </div>

            <div
              class="col-md-6 col-lg-4 wow bounceInUp"
              data-wow-delay="0.1s"
              data-wow-duration="1.4s"
            >
              <div class="box">
                <div class="icon" style="background: #e6fdfc">
                  <i class="ion-ios-paper-outline" style="color: #3fcdc7"></i>
                </div>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">
                  Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur
                </p>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-4 wow bounceInUp"
              data-wow-delay="0.1s"
              data-wow-duration="1.4s"
            >
              <div class="box">
                <div class="icon" style="background: #eafde7">
                  <i
                    class="ion-ios-speedometer-outline"
                    style="color: #41cf2e"
                  ></i>
                </div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">
                  Excepteur sint occaecat cupidatat non proident, sunt in culpa
                  qui officia deserunt mollit anim id est laborum
                </p>
              </div>
            </div>

            <div
              class="col-md-6 col-lg-4 wow bounceInUp"
              data-wow-delay="0.2s"
              data-wow-duration="1.4s"
            >
              <div class="box">
                <div class="icon" style="background: #e1eeff">
                  <i class="ion-ios-world-outline" style="color: #2282ff"></i>
                </div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p class="description">
                  At vero eos et accusamus et iusto odio dignissimos ducimus qui
                  blanditiis praesentium voluptatum deleniti atque
                </p>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-4 wow bounceInUp"
              data-wow-delay="0.2s"
              data-wow-duration="1.4s"
            >
              <div class="box">
                <div class="icon" style="background: #ecebff">
                  <i class="ion-ios-clock-outline" style="color: #8660fe"></i>
                </div>
                <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                <p class="description">
                  Et harum quidem rerum facilis est et expedita distinctio. Nam
                  libero tempore, cum soluta nobis est eligendi
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- #services -->

      <!--==========================
      Why Us Section
    ============================-->
      <section id="why-us" class="wow fadeIn">
        <div class="container-fluid">
          <header class="section-header">
            <h3>Why choose us?</h3>
<?php
    $query = "select * from tbl_why";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>
            <p>
              <?php echo $result['title']; ?>
            </p>
          </header>

          <div class="row">
            <div class="col-lg-6">
              <div class="why-us-img">
                <img src="admin/<?php echo $result['image']; ?>" alt="" class="img-fluid" />
              </div>
            </div>

            <div class="col-lg-6">
              <div class="why-us-content">
                <p>
                  <?php echo $result['description']; ?>
                </p>


                <div class="features wow bounceInUp clearfix why-point">
                  <div class="why-top">
                    <img src="admin/upload/why/creative.png" alt="">
                    <h4><?php echo $result['point1_title']; ?></h4>
                  </div>
                  <p>
                    <?php echo $result['point1_desc']; ?>
                  </p>
                </div>

                <div class="features wow bounceInUp clearfix why-point">
                  <div class="why-top">
                    <img src="admin/upload/why/price.png" alt="">
                    <h4><?php echo $result['point2_title']; ?></h4>
                  </div>
                  
                  <p>
                    <?php echo $result['point2_desc']; ?>
                  </p>
                </div>

                <div class="features wow bounceInUp clearfix why-point">
                  <div class="why-top">
                    <img src="admin/upload/why/ear.png" alt="">
                    <h4><?php echo $result['point3_title']; ?></h4>
                  </div>
                  
                  <p>
                    <?php echo $result['point3_desc']; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php } } ?>
        <div class="container">
          <div class="row counters">
            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">274</span>
              <p>Clients</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">421</span>
              <p>Projects</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">1,364</span>
              <p>Hours Of Support</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">18</span>
              <p>Hard Workers</p>
            </div>
          </div>
        </div>
      </section>

      <!--==========================
      Call To Action Section
    ============================-->
      <!-- <section id="call-to-action" class="wow fadeInUp">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
              <h3 class="cta-title">Call To Action</h3>
              <p class="cta-text">
                Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.
              </p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Call To Action</a>
            </div>
          </div>
        </div>
      </section> -->
      <!-- #call-to-action -->

      <!--==========================
      Features Section
    ============================-->
      <section id="features">
        <div class="container">
          <div class="row feature-item">
            <div class="col-lg-6 wow fadeInUp">
              <img src="img/features-1.svg" class="img-fluid" alt="" />
            </div>
            <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
              <h4>What We Do</h4>

              <p>
                Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati
                possimus ea. Quas molestiae perspiciatis occaecati qui rerum.
                Deleniti quod porro sed quisquam saepe. Numquam mollitia
                recusandae non ad at et a.
              </p>
              <p>
                Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti.
                Odit qui asperiores ea corporis deserunt veritatis quidem
                expedita perferendis. Qui rerum eligendi ex doloribus quia sit.
                Porro rerum eum eum.
              </p>
            </div>
          </div>

          <!--<div class="row feature-item mt-5 pt-5">
            <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
              <img src="img/features-2.svg" class="img-fluid" alt="" />
            </div>

            <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
              <h4>
                Neque saepe temporibus repellat ea ipsum et. Id vel et quia
                tempora facere reprehenderit.
              </h4>
              <p>
                Delectus alias ut incidunt delectus nam placeat in consequatur.
                Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio.
                Cumque fugit earum est quam officiis numquam. Ducimus corporis
                autem at blanditiis beatae incidunt sunt.
              </p>
              <p>
                Voluptas saepe natus quidem blanditiis. Non sunt impedit
                voluptas mollitia beatae. Qui esse molestias. Laudantium libero
                nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
              </p>
              <p>
                Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore
                sint quia modi. Numquam est aut fuga mollitia exercitationem nam
                accusantium provident quia.
              </p>
            </div>
          </div> -->
        </div>
      </section>
      <!-- #about -->

      <!--==========================
      Team Section
    ============================-->
      <section id="team" class="section-bg">
        <div class="container">
          <div class="section-header">
            <h3>Team</h3>
            <p>
              Meet the awesome people who have taken the responsibilities of clients
            </p>
          </div>

          <div class="row">
<?php
    $query = "select * from tbl_team where type='0'";
    $getData = $db->select($query);
    if($getData)
    {
        $delay = 0;
        while($result = $getData->fetch_assoc()) 
        {
          $delay = $delay+0.1;
?>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
              <div class="member"> 
                <img src="admin/<?php echo $result['image'];?>" class="img-fluid member-img" alt="" />
                <div class="member-info">
                  <div class="member-info-content">
                    <h4><?php echo $result['name'];?></h4>
                    <span><?php echo $result['designation'];?></span>
                    <div class="social">
                      <?php if($result['fb']!="") { ?>
                      <a href="<?php echo $result['fb'];?>" target="_blank"><i class="fa fa-facebook"></i></a>
                      <?php } ?>
                      <?php if($result['ins']!="") { ?>
                      <a href="<?php echo $result['ins'];?>" target="_blank"><i class="fa fa-instagram"></i></a>
                      <?php } ?>
                      <?php if($result['tw']!="") { ?>
                      <a href="<?php echo $result['tw'];?>" target="_blank"><i class="fa fa-twitter"></i></a>
                      <?php } ?>
                      <?php if($result['li']!="") { ?>
                      <a href="<?php echo $result['li'];?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                      <?php } ?>
                      <?php if($result['git']!="") { ?>
                      <a href="<?php echo $result['git'];?>" target="_blank"><i class="fa fa-github"></i></a>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<?php } } ?>

            <div class="col-lg-12 mt-2">
              <div class="get-started-btn-div justify-content-center">
                <a
                  href="team.php"
                  class="btn-get-started scrollto custom-btn btn-16"
                  >View all members</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- #team -->

      <!--==========================
      Pricing Section
    ============================-->
      <section id="pricing" class="wow fadeInUp section-bg">
        <div class="container">
          <header class="section-header">
            <h3>Pricing</h3>
            <p>Choose a convinient plan and grow your business</p>
          </header>

          <div class="row flex-items-xs-middle flex-items-xs-center">
            <!-- Basic Plan  -->
            <div class="col-xs-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h3>
                    <span class="currency">৳</span>19<span class="period"
                      >/month</span
                    >
                  </h3>
                </div>
                <div class="card-block">
                  <h4 class="card-title">Basic Plan</h4>
                  <ul class="list-group">
                    <li class="list-group-item">Odio animi voluptates</li>
                    <li class="list-group-item">Inventore quisquam et</li>
                    <li class="list-group-item">Et perspiciatis suscipit</li>
                    <li class="list-group-item">24/7 Support System</li>
                  </ul>
                  <a href="#" class="btn">Choose Plan</a>
                </div>
              </div>
            </div>

            <!-- Regular Plan  -->
            <div class="col-xs-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h3>
                    <span class="currency">৳</span>29<span class="period"
                      >/month</span
                    >
                  </h3>
                </div>
                <div class="card-block">
                  <h4 class="card-title">Regular Plan</h4>
                  <ul class="list-group">
                    <li class="list-group-item">Odio animi voluptates</li>
                    <li class="list-group-item">Inventore quisquam et</li>
                    <li class="list-group-item">Et perspiciatis suscipit</li>
                    <li class="list-group-item">24/7 Support System</li>
                  </ul>
                  <a href="#" class="btn">Choose Plan</a>
                </div>
              </div>
            </div>

            <!-- Premium Plan  -->
            <div class="col-xs-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h3>
                    <span class="currency">৳</span>39<span class="period"
                      >/month</span
                    >
                  </h3>
                </div>
                <div class="card-block">
                  <h4 class="card-title">Premium Plan</h4>
                  <ul class="list-group">
                    <li class="list-group-item">Odio animi voluptates</li>
                    <li class="list-group-item">Inventore quisquam et</li>
                    <li class="list-group-item">Et perspiciatis suscipit</li>
                    <li class="list-group-item">24/7 Support System</li>
                  </ul>
                  <a href="#" class="btn">Choose Plan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- #pricing -->

      <!--==========================
      Clients Section
    ============================-->
      <section id="testimonials">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="form">
                <!-- <h4>Send us a message</h4> -->
                <header class="section-header">
                  <h3>Send us a message</h3>
                </header>
                <form action="" method="post" role="form" class="contactForm">
                  <div class="form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                      data-rule="minlen:4"
                      data-msg="Please enter at least 4 chars"
                    />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Your Email"
                      data-rule="email"
                      data-msg="Please enter a valid email"
                    />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input
                      type="text"
                      class="form-control"
                      name="subject"
                      id="subject"
                      placeholder="Subject"
                      data-rule="minlen:4"
                      data-msg="Please enter at least 8 chars of subject"
                    />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea
                      class="form-control"
                      name="message"
                      rows="5"
                      data-rule="required"
                      data-msg="Please write something for us"
                      placeholder="Message"
                    ></textarea>
                    <div class="validation"></div>
                  </div>

                  <!-- <div id="sendmessage">
                    Your message has been sent. Thank you!
                  </div> -->
                  <div id="errormessage"></div>

                  <div class="get-started-btn-div">
                    <button
                      type="submit"
                      class="btn-get-started scrollto custom-btn btn-16"
                      title="Send Message"
                    >
                      Send Message
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <header class="section-header">
                <h3>Testimonials</h3>
              </header>
              <div class="owl-carousel testimonials-carousel wow fadeInUp">
<?php
    $query = "select * from tbl_testimonial order by id desc limit 8";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>   
                <div class="testimonial-item">
                  <img
                    src="admin/<?php echo $result['logo']; ?>"
                    class="testimonial-img"
                    alt=""
                  />

                  <h3>Product: <?php echo $result['product']; ?></h3>
                  <h4>Service: <?php echo $result['service']; ?></h4>
                  <p><?php echo $result['client']; ?></p>
                  <p><?php echo $result['address']; ?></p>
                </div>
<?php } } ?>

              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- #testimonials -->

      <!--==========================
      Clients Section
    ============================-->
      <section id="clients" class="wow fadeInUp">
        <div class="container">
          <header class="section-header">
            <h3>Our Clients</h3>
          </header>

          <div class="owl-carousel clients-carousel">
<?php
    $query = "select * from tbl_client";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>           
            <img src="admin/<?php echo $result['logo']; ?>" alt="client" />
<?php } } ?>
          </div>
        </div>
      </section>
      <!-- #clients -->

      <!--==========================
      Frequently Asked Questions Section
    ============================-->
      <section id="faq">
        <div class="container">
          <header class="section-header">
            <h3>Frequently Asked Questions</h3>
            <p>
              Everything you need to know is given below. Give it a try to guide you.
            </p>
          </header>

          <ul id="faq-list" class="wow fadeInUp">
            <li>
              <a data-toggle="collapse" class="collapsed" href="#faq1"
                >Non consectetur a erat nam at lectus urna duis?
                <i class="ion-android-remove"></i
              ></a>
              <div id="faq1" class="collapse" data-parent="#faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id
                  volutpat lacus laoreet non curabitur gravida. Venenatis lectus
                  magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq2" class="collapsed"
                >Feugiat scelerisque varius morbi enim nunc faucibus a
                pellentesque? <i class="ion-android-remove"></i
              ></a>
              <div id="faq2" class="collapse" data-parent="#faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque
                  habitant morbi. Id interdum velit laoreet id donec ultrices.
                  Fringilla phasellus faucibus scelerisque eleifend donec
                  pretium. Est pellentesque elit ullamcorper dignissim. Mauris
                  ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq3" class="collapsed"
                >Dolor sit amet consectetur adipiscing elit pellentesque
                habitant morbi? <i class="ion-android-remove"></i
              ></a>
              <div id="faq3" class="collapse" data-parent="#faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices
                  sagittis orci. Faucibus pulvinar elementum integer enim. Sem
                  nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                  pellentesque eu tincidunt. Lectus urna duis convallis
                  convallis tellus. Urna molestie at elementum eu facilisis sed
                  odio morbi quis
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq4" class="collapsed"
                >Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                <i class="ion-android-remove"></i
              ></a>
              <div id="faq4" class="collapse" data-parent="#faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque
                  habitant morbi. Id interdum velit laoreet id donec ultrices.
                  Fringilla phasellus faucibus scelerisque eleifend donec
                  pretium. Est pellentesque elit ullamcorper dignissim. Mauris
                  ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq5" class="collapsed"
                >Tempus quam pellentesque nec nam aliquam sem et tortor
                consequat? <i class="ion-android-remove"></i
              ></a>
              <div id="faq5" class="collapse" data-parent="#faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo.
                  Dignissim suspendisse in est ante in. Nunc vel risus commodo
                  viverra maecenas accumsan. Sit amet nisl suscipit adipiscing
                  bibendum est. Purus gravida quis blandit turpis cursus in
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq6" class="collapsed"
                >Tortor vitae purus faucibus ornare. Varius vel pharetra vel
                turpis nunc eget lorem dolor? <i class="ion-android-remove"></i
              ></a>
              <div id="faq6" class="collapse" data-parent="#faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris
                  vitae ultricies leo integer malesuada nunc vel. Tincidunt eget
                  nullam non nisi est sit amet. Turpis nunc eget lorem dolor
                  sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                  Pellentesque diam volutpat commodo sed egestas egestas
                  fringilla phasellus faucibus. Nibh tellus molestie nunc non
                  blandit massa enim nec.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- #faq -->
    </main>

    <!--==========================
    Footer
    ============================-->
    <?php include "inc/footer.php"; ?>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script>
      var spanText = function spanText(text) {
        var string = text.innerText;
        var spaned = "";
        for (var i = 0; i < string.length; i++) {
          if (string.substring(i, i + 1) === " ")
            spaned += string.substring(i, i + 1);
          else spaned += "<span>" + string.substring(i, i + 1) + "</span>";
        }
        text.innerHTML = spaned;
      };

      var headline = document.querySelector("h2");

      spanText(headline);

      let animations = document.querySelectorAll(".banner-title");

      animations.forEach((animation) => {
        let letters = animation.querySelectorAll("span");
        letters.forEach((letter, i) => {
          letter.style.animationDelay = i * 0.04 + "s";
        });
      });
    </script>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/mobile-nav/mobile-nav.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
  </body>
</html>
