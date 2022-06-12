<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>AGMM Soft | Service</title>
    <!--==========================
    Header
    ============================-->
    <?php include "inc/header.php"; ?>
    <!-- #header -->
<?php
	if(!isset($_GET['sId']) || $_GET['sId'] == NULL)
	{
		echo "<script>window.location = 'index.php'; </script>";
	}
	else
	{
    $sId = $fm->validation($_GET['sId']);
    $sId = mysqli_real_escape_string($db->link1, $sId);
	}
?>
    <!--==========================
    Intro Section
  ============================-->
    <section id="about_page" class="clearfix">
      <div class="container h-100">
        <div
          class="row justify-content-center banner-section"
        >
        <div class="col-md-6 intro-img order-md-first order-first">
            <img src="img/service.png" alt="" class="img-fluid" style="margin-top: 150px"/>
          </div>
          <div class="col-md-6 intro-info intro-title order-md-last order-last">
            <h2 class="banner-title" style="text-align: center; margin-top: 90px">Service</h2>
          </div>

        </div>
      </div>
    </section>

    <!-- #intro -->

    <main id="main">
      <!--==========================
      About Us Section
    ============================-->
      <section id="about" class="client-section gallery-section">
        <div class="container">
          <div class="row">
<?php
    $query = "select * from tbl_service where id='$sId'";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>
        
            
            <div class="col-md-1 col-lg-1"></div>
            <div class="col-12 col-md-10 col-lg-10">
                <div class="service-div">
                    <div class="service-img-div">
                        <img src="admin/<?php echo $result['image'];?>" class="service-img" alt="service">
                    </div>
                    <div class="service-details">
                        <h3><?php echo $result['title'];?></h3>
                        <p><?php echo $result['description'];?></p>

                        <div class="module-details service-feature">
                      <ol class="list list-mpoint list-spoint">
<?php
    $MPquery = "select * from tbl_service_feature where s_id='$sId'";
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
                </div>
            </div>
<?php } } ?>
            <div class="col-md-1 col-lg-1"></div>

          </div>
        </div>
      </section>
      <!-- #about -->

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
