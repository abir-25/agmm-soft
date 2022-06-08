<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>AGMM Soft | Gallery</title>
    <!--==========================
    Header
    ============================-->
    <?php include "inc/header.php"; ?>
    <!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="about_page" class="clearfix">
      <div class="container h-100">
        <div
          class="row justify-content-center banner-section"
        >
        <div class="col-md-6 intro-img order-md-first order-first">
            <img src="img/gallery.png" alt="" class="img-fluid" style="margin-top: 150px"/>
          </div>
          <div class="col-md-6 intro-info intro-title order-md-last order-last">
            <h2 class="banner-title" style="text-align: center;">Gallery</h2>
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

      <!-- <div class="gallery-container p-3">
      <a href="https://source.unsplash.com/600x600/?sig=1" data-lightbox="homePortfolio">
        <img src="https://source.unsplash.com/600x600/?sig=1"/>
      </a>
      
      <a href="https://source.unsplash.com/600x800/?sig=12" data-lightbox="homePortfolio" class="vertical">
        <img src="https://source.unsplash.com/600x800/?sig=12"/>
      </a>
      
      <a href="https://source.unsplash.com/800x600/?sig=71" data-lightbox="homePortfolio" class="horizontal">
        <img src="https://source.unsplash.com/800x600/?sig=71"/>
      </a>
      
      <a href="https://source.unsplash.com/600x600/?sig=40" data-lightbox="homePortfolio">
        <img src="https://source.unsplash.com/600x600/?sig=40"/>
      </a>
      
      <a href="https://source.unsplash.com/600x600/?sig=32" data-lightbox="homePortfolio">
        <img src="https://source.unsplash.com/600x600/?sig=32"/>
      </a>
      
      <a href="https://source.unsplash.com/800x800/?sig=7" data-lightbox="homePortfolio" class="big">
        <img src="https://source.unsplash.com/800x800/?sig=7"/>
      </a>
      
      <a href="https://source.unsplash.com/600x600/?sig=111" data-lightbox="homePortfolio">
        <img src="https://source.unsplash.com/600x600/?sig=111"/>
      </a>
      
      <a href="https://source.unsplash.com/600x800/?sig=94" data-lightbox="homePortfolio" class="vertical">
        <img src="https://source.unsplash.com/600x800/?sig=94"/>
      </a>
      
      <a href="https://source.unsplash.com/600x600/?sig=11" data-lightbox="homePortfolio">
        <img src="https://source.unsplash.com/600x600/?sig=11"/>
      </a>
      
      <a href="https://source.unsplash.com/800x600/?sig=68" data-lightbox="homePortfolio" class="horizontal">
        <img src="https://source.unsplash.com/800x600/?sig=68"/>
      </a>
      
      <a href="https://source.unsplash.com/600x600/?sig=24" data-lightbox="homePortfolio">
        <img src="https://source.unsplash.com/600x600/?sig=24"/>
      </a>
      
      <a href="https://source.unsplash.com/800x800/?sig=55" data-lightbox="homePortfolio" class="big">
        <img src="https://source.unsplash.com/800x800/?sig=55"/>
      </a>
      
      <a href="https://source.unsplash.com/600x600/?sig=56" data-lightbox="homePortfolio">
        <img src="https://source.unsplash.com/600x600/?sig=56"/>
      </a>
      
      <a href="https://source.unsplash.com/800x600/?sig=186" data-lightbox="homePortfolio" class="horizontal">
        <img src="https://source.unsplash.com/800x600/?sig=186"/>
      </a>
      
      <a href="https://source.unsplash.com/600x600/?sig=117" data-lightbox="homePortfolio">
        <img src="https://source.unsplash.com/600x600/?sig=117"/>
      </a>
      
      <a href="https://source.unsplash.com/800x800/?sig=157" data-lightbox="homePortfolio" class="big">
        <img src="https://source.unsplash.com/800x800/?sig=157"/>
      </a>
      
      <a href="https://source.unsplash.com/600x600/?sig=287" data-lightbox="homePortfolio">
        <img src="https://source.unsplash.com/600x600/?sig=287"/>
      </a>
      
      <a href="https://source.unsplash.com/600x800/?sig=307" data-lightbox="homePortfolio" class="vertical">
        <img src="https://source.unsplash.com/600x800/?sig=307"/>
      </a>
    </div> -->

        <div class="container">
          <div class="row">
<?php
    $query = "select * from tbl_gallery";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>           
            <div class="item col-6 col-lg-3 col-md-4 mb-4 p-3">
              <a href="admin/<?php echo $result['image']; ?>" class="fancybox" data-fancybox="gallery1">
                <img src="admin/<?php echo $result['image']; ?>" alt="" width="100%">
              </a>  
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
    
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    
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
