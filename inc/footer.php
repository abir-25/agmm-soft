<footer id="footer" class="section-bg">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="footer-links">
                <h4>Corporate Address</h4>
                <hr class="border-1" />
                <hr class="border-2" />
         
                <p>
                  <img src="img/map.png" alt=""> 
                  <span>
                    194/205,Adbul Motaleb Market (3rd Floor)<br />
                    Gulzarmoor,Chawkbazar,Chittogram
                  </span> 
                  <hr class="border-1" />
                  <hr class="border-2" />
                </p>
                <p>
                  <i class="fa fa-phone"></i> +88 01844 58 36 12
                  <hr class="border-1" />
                  <hr class="border-2" />
                </p>
                  
                <p><i class="fa fa-envelope"></i> agmmsoft@gmail.com</p>
                  
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
            <div class="col-lg-4 mt-5 mt-md-0">
              <div class="footer-links">
                <h4>Useful Links</h4>
                <hr class="border-1" />
                <hr class="border-2" />
                <ul>
                  <li><a href="index.php#intro">Home</a></li>
                  <li><a href="index.php#about">About</a></li>
                  <li><a href="index.php#products">Products</a></li>
                  <li><a href="index.php#services">Services</a></li>
                  <li><a href="index.php#team">Team</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <h4>Find us on Facebook</h4>
              <hr class="border-1" />
              <hr class="border-2" />
              <div class="facebook-div">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAGMMSOFT&tabs=timeline&width=286&height=132&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="286" height="132" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
              </div>
              
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
<?php
    $query = "select * from tbl_basic_info";
    $getData = $db->select($query);
    if($getData)
    {
        while($result = $getData->fetch_assoc()) 
        {
?>
          <?php echo $result['copyright']; ?>
<?php } } ?>
        </div>
        <div class="credits">
          Developed by <a href="#">AgameeIT</a>
        </div>
      </div>
    </footer>