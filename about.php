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
            <h2 class="banner-title">About Us</h2>
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
            <div class="col-lg-5 col-md-6">
              <div class="about-img">
                <img src="img/about-img.jpg" alt="" />
              </div>
            </div>

            <div class="col-lg-7 col-md-6 about-div">
              <div class="about-content">
                <h2>Company Overview</h2>
                <p>
                    Aut dolor id. Sint aliquam consequatur ex ex labore. Et quis
                    qui dolor nulla dolores neque. Aspernatur consectetur omnis
                    numquam quaerat. Sed fugiat nisi. Officiis veniam molestiae.
                    Et vel ut quidem alias veritatis repudiandae ut fugit. Est
                    ut eligendi aspernatur nulla voluptates veniam iusto vel
                    quisquam. Fugit ut maxime incidunt accusantium totam
                    repellendus eum error. Et repudiandae eum iste qui et ut ab
                    alias.
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
                    Aut dolor id. Sint aliquam consequatur ex ex labore. Et quis
                    qui dolor nulla dolores neque. Aspernatur consectetur omnis
                    numquam quaerat. Sed fugiat nisi. Officiis veniam molestiae.
                    Et vel ut quidem alias veritatis repudiandae ut fugit. Est
                    ut eligendi aspernatur nulla voluptates veniam iusto vel
                    quisquam. Fugit ut maxime incidunt accusantium totam
                    repellendus eum error. Et repudiandae eum iste qui et ut ab
                    alias.
                  </p>
                </div>
                <div class="mission-vision-div">
                  <div class="about-mission-img-div">
                    <img class="vision-img" src="img/about/vision.png" alt="" />
                  </div>
                  <p>
                    Aut dolor id. Sint aliquam consequatur ex ex labore. Et quis
                    qui dolor nulla dolores neque. Aspernatur consectetur omnis
                    numquam quaerat. Sed fugiat nisi. Officiis veniam molestiae.
                    Et vel ut quidem alias veritatis repudiandae ut fugit. Est
                    ut eligendi aspernatur nulla voluptates veniam iusto vel
                    quisquam.
                  </p>
                </div>
                <ul>
                  <li>
                    <i class="ion-android-checkmark-circle"></i> Ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.
                  </li>
                  <li>
                    <i class="ion-android-checkmark-circle"></i> Duis aute irure
                    dolor in reprehenderit in voluptate velit.
                  </li>
                  <li>
                    <i class="ion-android-checkmark-circle"></i> Ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate trideta storacalaperda
                    mastiro dolore eu fugiat nulla pariatur.
                  </li>
                </ul>
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
