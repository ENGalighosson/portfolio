
@include('frontend.body.header')

@yield('home')

<main id="main">

  <!-- ======= Cliens Section ======= -->
  <section id="cliens" class="cliens section-bg">
    <div class="container">

      <div class="row" data-aos="zoom-in">

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('frontend/assets/img/clients/client-1.png')}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('frontend/assets/img/clients/client-2.png')}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('frontend/assets/img/clients/client-3.png')}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('frontend/assets/img/clients/client-4.png')}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('frontend/assets/img/clients/client-5.png')}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
          <img src="{{asset('frontend/assets/img/clients/client-6.png')}}" class="img-fluid" alt="">
        </div>

      </div>

    </div>
  </section><!-- End Cliens Section -->
@include('frontend.about')



  @include('frontend.services')

  
@include('frontend.portfolio')

@include('frontend.team')


  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Pricing</h2>
        <p>Affordable web development packages for your business or personal brand.</p>
      </div>

      <div class="row">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <h3>portfolio standard</h3>
             <h4><sup>$</sup>$120</h4>
            <ul>
              <li><i class="bx bx-check"></i> Custom sections</li>
              <li><i class="bx bx-check"></i> animations</li>
              <li><i class="bx bx-check"></i> contact form</li>
              <li><i class="bx bx-check"></i> responsive & polished</li>
              <li class="na"><i class="bx bx-x"></i> <span>Admin Panel</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>Dynamic content (team, services, projects), edit via dashboard</span></li>
            </ul>
            <a href="#contact" class="buy-btn">Get Started</a>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box ">
            <h3>Portfolio Website with Admin Panel</h3>
            <h4><sup>$</sup>250</h4>
            <ul>
             li><i class="bx bx-check"></i> Custom sections</li>
              <li><i class="bx bx-check"></i> animations</li>
              <li><i class="bx bx-check"></i> contact form</li>
              <li><i class="bx bx-check"></i> responsive & polished</li>
              <li><i class="bx bx-check"></i> Admin Panel</li>
              <li><i class="bx bx-check"></i> Dynamic content (team, services, projects), edit via dashboard</li>
              <li><i class="bx bx-check"></i> Extra: Hosting & Domain Help</li>
            </ul>
            <a href="#contact" class="buy-btn">Get Started</a>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="box">
            <h3>Full stack website</h3>
            <h4><sup>$</sup>250 – <sup>$</sup>350</h4>
            <ul>
              <li><i class="bx bx-check"></i> Admin panel (dashboard)</li>
              <li><i class="bx bx-check"></i> Frontend pages (Home, About, Services, Portfolio, Contact)</li>
              <li><i class="bx bx-check"></i> Dynamic content (projects, team, blog, etc.)</li>
              <li><i class="bx bx-check"></i> Form handling (contact form, maybe login)</li>
              <li><i class="bx bx-check"></i> Database (MySQL)</li>
              <li><i class="bx bx-check"></i> Responsive layout</li>
            </ul>
            <a href="#contact" class="buy-btn">Get Started</a>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Pricing Section -->

 
@include('frontend.contact')

</main><!-- End #main -->
@include('frontend.body.footer')