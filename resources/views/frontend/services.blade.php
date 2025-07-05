<?php

use App\Models\Service;

$services = Service::all();

?>
<!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Offering full-stack web development, IoT solutions, mobile apps, backend systems, UI/UX design, multilingual sites, Linux administration, and cybersecurity.</p>
        </div>

        <div class="row">

        @foreach ( $services as $service)
        
        
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="{{$service->icone  }}"></i></div>
              <h4><a href="">{{$service->title  }}</a></h4>
              <p>{{$service->short_desc  }}</p>
            </div>
          </div>

          @endforeach

          
        </div>

      </div>
    </section><!-- End Services Section -->