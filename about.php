<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>AGMM Soft | About</title>
    <!--==========================
    Header
    ============================-->
    <?php include "inc/header.php"; ?>
    <!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="about_page" class="clearfix">
      <div class="container d-flex h-100">
        <div
          class="row justify-content-center align-self-center banner-section"
        >
        <div class="col-md-6 intro-img order-md-first order-first">
            <img src="img/about.jpg" alt="" class="img-fluid" />
          </div>
          <div class="col-md-6 intro-info intro-title order-md-last order-last">
            <h2 class="banner-title d-none d-md-block">About Us</h2>
            <h2 class="d-md-none d-block">About Us</h2>
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
<?php
    $query = "select * from tbl_about";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
          $overview1 = $result['overview1'];
          $overview1_front = substr($overview1, 0, 9);
          $overview1_rest = substr($overview1, 9 , (int)strlen($overview1));
          
          $overview2 = $result['overview2']; 
          $overview2_front = substr($overview2, 0, 9);
          $overview2_rest = substr($overview2, 9, (int)strlen($overview2));
          
          $overview3 = $result['overview3']; 
          $overview3_front = substr($overview3, 0, 2);
          $overview3_rest = substr($overview3, 2, (int)strlen($overview3));
          
?>
            <div class="col-12">
              <div class="about-content about-top-overview">
                <h2>Company Overview</h2>
                <img src="img/headline_boder.png" alt="">
                <p class="about_overview">
                  <span><?php echo $overview1_front; ?></span><?php echo $overview1_rest; ?>
                </p>
                <p class="about_overview">
                  <span><?php echo $overview2_front; ?></span><?php echo $overview2_rest; ?>
                </p>
                <p class="about_overview">
                  <span><?php echo $overview3_front; ?></span><?php echo $overview3_rest; ?>
                </p>
              </div>
            </div>

            <div class="col-12">
              <div class="about-content about-top-overview">
                <h2>Mission</h2>
                <img src="img/headline_boder.png" alt="">
                <p class="about_overview">
                  <?php echo $result['mission']; ?>
                </p>
              </div>
            </div>

            <div class="col-12">
              <div class="about-content about-top-overview">
                <h2>Vision</h2>
                <img src="img/headline_boder.png" alt="">
                <p class="about_overview">
                  <?php echo $result['vision']; ?>
                </p>
              </div>
            </div>

<?php } } ?>
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
