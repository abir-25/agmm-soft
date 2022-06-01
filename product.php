<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>AGMM Soft | Product</title>
    <!--==========================
    Header
    ============================-->
    <?php include "inc/header.php"; ?>
    <!-- #header -->
<?php
	if(!isset($_GET['proId']) || $_GET['proId'] == NULL)
	{
		echo "<script>window.location = 'index.php'; </script>";
	}
	else
	{
		$proId = $_GET['proId'];
	}
?>
    <!--==========================
    Intro Section
  ============================-->
    <section id="about_page" class="clearfix">
      <div class="container d-flex h-100">
        <div
          class="row justify-content-center align-self-center banner-section"
        >
<?php
    $query = "select * from tbl_product where id='$proId'";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>
        <div class="col-md-6 intro-img order-md-first order-first">
            <img src="admin/<?php echo $result['image']; ?>" alt="" class="img-fluid" />
          </div>
          <div class="col-md-6 intro-info intro-title order-md-last order-last">
            <h2 class="banner-title product-title"><?php echo $result['title']; ?></h2>
          </div> 
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
          <div class="row">

            <div class="col-12">
              <div class="about-content about-top-overview product-overview">
                <h2>AGMMS SOFT <span><?php echo $result['title']; ?></span></h2> 
                <img src="img/headline_boder.png" alt="">
                <p class="about_overview">
                  <?php echo $result['description']; ?>
                </p>
              </div> 
            </div>


            <div class="col-12">
              <div class="about-content about-top-overview">
                <h2>Benefits of AGMM SOFT <?php echo $result['title']; ?></span></h2>
                <img src="img/headline_boder.png" alt="">

                <ol class="list">
<?php
    $Bquery = "select * from tbl_benefit where p_id='$proId'";
    $BgetData = $db->select($Bquery);
    if($BgetData)
    {
        while($benefitResult = $BgetData->fetch_assoc()) 
        {
?>
                  <li class="item">
                    <div>
                        <h2 class="benefit__title"><?php echo $benefitResult['title']; ?></h2><span><?php echo $benefitResult['description']; ?></span>
                    </div>
                      
                  </li>

<?php } } ?>
              </ol>
              </div>
            </div>

            <div class="col-12 mt-4">
              <div class="about-content about-top-overview">
                <h2>Modules of AGMM SOFT <?php echo $result['title']; ?></span></h2>
                <img src="img/headline_boder.png" alt="">
<?php
    $Mquery = "select * from tbl_module where p_id='$proId'";
    $MgetData = $db->select($Mquery);
    if($MgetData)
    {
        while($moduleResult = $MgetData->fetch_assoc()) 
        {
          $m_id = $moduleResult['id'];
?>
                  <div class="module-section">
                    <div class="module-div">
                      <div class="module-icon">
                        <img src="admin/<?php echo $moduleResult['image']; ?>" alt="">
                      </div>
                        <h2 class="benefit__title"><?php echo $moduleResult['title']; ?></h2>
                    </div>
                    <div class="module-details">
                      <ol class="list list-mpoint">
<?php
    $MPquery = "select * from tbl_module_point where p_id='$proId' and m_id='$m_id'";
    $MPgetData = $db->select($MPquery);
    if($MPgetData)
    {
        while($mpResult = $MPgetData->fetch_assoc()) 
        {
?>
                        <li class="item">
                              <span><?php echo $mpResult['title']; ?></span> 
                        </li>

<?php } } ?>
                      </ol>
                    </div>
                  </div>
<?php } } ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- #about -->
<?php } } ?>
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
    <!-- <script>
      var url = window.location.pathname;
      var dir = url.substring(url.lastIndexOf('/')+1);
      var about_link = document.getElementById("about_link");
      about_link.classList.add('active');
    </script> -->
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
