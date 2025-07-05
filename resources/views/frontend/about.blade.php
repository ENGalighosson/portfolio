<!-- ======= About Us Section ======= -->
<?php

use App\Models\About;

$about = About::get()->first();


?>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Me</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
                I’m Ali Ghosson, a passionate Computer Engineer with expertise in both software development and hardware systems.
                 I thrive on building innovative solutions that bridge technology and real-world needs—whether it’s crafting responsive 
                 web applications or designing embedded devices for safety and automation.
            </p>
            <ul>
              <h3>What I Do</h3>
              <li><i class="ri-check-double-line"></i> 💻 Full-Stack Development: Build dynamic websites using React, JavaScript, PHP, and MySQL.</li>
              <li><i class="ri-check-double-line"></i> 🔌 Embedded Systems: Develop IoT projects with Arduino, ESP32, and sensors (e.g., GPS, heart-rate monitoring).</li>
              <li><i class="ri-check-double-line"></i> 🛠️ Problem-Solver: Love tackling challenges—from circuit design to optimizing user experiences.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
           <h3> My Journey</h3>
            <ul>
           <li><i class="ri-check-double-line"></i>   As a recent graduate (Bachelor’s in Computer Engineering, GPA: 3.3/4.0), I’ve worked on projects like:</li>

            <li><i class="ri-check-double-line"></i>        A portable safety device with real-time health tracking (using LoRa, GPS, and ESP-NOW).</li>

             <li><i class="ri-check-double-line"></i>     Freelance web development, delivering custom backend systems and client-driven solutions.</li>

          <li><i class="ri-check-double-line"></i>    I’m fluent in English, French, Arabic, and Spanish, and I believe technology’s true power lies in its ability to connect and protect people.</li>

            <h3>  Let’s create something amazing together!</h3>  
            <ul>
            <a href="{{ asset('pdf/cv.pdf') }}" class="btn-learn-more" download="Ali_Ghosson_CV.pdf">
  Download My CV
</a>
           <a href="{{ asset('pdf/cv.pdf') }}" class="btn-learn-more" target="_blank">
  View My CV
</a>
          </div>
        </div>
          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
      </div>
      </div>
    </section><!-- End About Us Section -->

   <!-- ======= Skills Section ======= -->
  <section id="skills" class="skills">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
          <img src="{{asset('/photo_about/'.$about->photo)}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
          <h3>{{$about->title_skills}} </h3>
          <p class="fst-italic">
          {{$about->short_desc_skills}}

          </p>

          <div class="skills-content">

            <div class="progress">
              <span class="skill">{{$about->skill1}} <i class="val">{{$about->skill1_percentage}} </i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">{{$about->skill2}}  <i class="val">{{$about->skill2_percentage}}</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">{{$about->skill3}}  <i class="val">{{$about->skill3_percentage}}</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">{{$about->skill4}} <i class="val">{{$about->skill4_percentage}}</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </section><!-- End Skills Section -->