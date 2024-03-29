<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>AGMM SOFT | Technology</title>
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
        <div class="col-md-6 intro-img order-md-first order-first tech-img">
            <img src="img/tech.png" alt="" class="img-fluid" />
          </div>
          <div class="col-md-6 intro-info intro-title order-md-last order-last">
            <h2 class="banner-title team-top-title">Technology</h2>
          </div>

        </div>
      </div>
    </section>

    <!-- #intro -->

    <main id="main">
      <!--==========================
      About Us Section
    ============================-->
      <section id="about" class="technology-section">
        <div class="container">
          <div class="row">
<?php
    $query = "select * from tbl_technology";
    $getData = $db->select($query);
    if($getData)
    {
        $delay = 0;
        while($result = $getData->fetch_assoc()) 
        {
          $delay = $delay+0.1;
?>
            <div class="col-lg-3 col-12 mt-5">
              <div class="language-div">
                <img src="admin/<?php echo $result['image']; ?>" alt="">
                <div class="language-details">
                  <h2><?php echo $result['title']; ?></h2>
                  <p><?php echo $result['short']; ?></p>
                  <div class="link-div">
                    <a class="button-read-more" href="tech-details.php?techId=<?php echo $result['id']; ?>"><span class="text">Read More</span></a>
                  </div>

                </div>
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
