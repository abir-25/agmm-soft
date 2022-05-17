<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>AGMM Soft | Team</title>
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
            <img src="img/team.png" alt="" class="img-fluid" />
          </div>
          <div class="col-md-6 intro-info intro-title order-md-last order-last">
            <h2 class="banner-title">Team Members</h2>
          </div> 
        </div>
      </div>
    </section>

    <!-- #intro -->

    <main id="main">
       <!--==========================
      Team Section
    ============================-->
      <section id="team" class="section-bg">
        <div class="container mb-5">
          <div class="section-header">
            <h3>Management Profile</h3>
          </div>

          <div class="row">
<?php
    $query = "select * from tbl_team where type='0' limit 4";
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
          </div>
        </div>

        <div class="container mt-5 pt-5">
          <div class="section-header">
            <h3>Who Work with us</h3>
            <p>
              Meet the most awesome people who have taken the responsibilities of clients
            </p>
          </div>

          <div class="row">
<?php
    $query = "select * from tbl_team where type='1'";
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
          </div>
        </div>
      </section>
      <!-- #team -->

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
