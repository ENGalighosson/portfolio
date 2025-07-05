
  <?php

use App\Models\Team;

$teams = Team::all();

?>
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Stay Updated with My Latest Projects & Offers</p>
           
             <form action="{{route('create_subscriber')}}" method="POST" enctype="multipart/form-data">
                    @csrf   
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>ali ghosson</h3>
            <p>
             joun al chouf <br>
              Mont Lebanon<br>
               <br>Lebanon<br>
              <strong>Phone:</strong> +961 71636493<br>
              <strong>Email:</strong> eng.alighosson@gmail.com<br>
            </p>
          </div>

          

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Embedded Systems</a></li>
             
            </ul>
          </div>
@foreach ($teams as $team)
         <div class="col-lg-3 col-md-6 footer-links">
            <h4>My Social Networks</h4>
            <p>Follow Me: </p>
            <div class="social-links mt-3">
              <a href="{{$team->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="{{$team->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="{{$team->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="{{$team->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
@endforeach
        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>

    
    
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>