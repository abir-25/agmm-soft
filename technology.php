<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>AGMM Soft | Technology</title>
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
            <img src="img/tech.jpg" alt="" class="img-fluid" />
          </div>
          <div class="col-md-6 intro-info intro-title order-md-last order-last">
            <h2 class="banner-title">Technology</h2>
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
            <div class="col-lg-3 col-12">
              <div class="language-div">
                <img src="admin/upload/tech/orac.jpg" alt="">
                <div class="language-details">
                  <h2>Oracle</h2>
                  <p>Oracle Forms is a software product for creating screens that interact with an Oracle database</p>
                  <div class="link-div">
                    <a class="button-read-more" href="tech-details.php"><span class="text">Read More</span></a>
                  </div>

                </div>
              </div>
            </div>

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