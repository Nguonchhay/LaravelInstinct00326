@extends('layouts.app')

@section('content')

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Doctors</h1>
              <p class="mb-0">
                Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo
                odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum
                debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat
                ipsum dolorem.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Doctors</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          {{-- <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="doctor-card">
              <div class="doctor-image">
                <img src="assets/img/health/staff-1.webp" alt="Dr. Marcus Johnson" class="img-fluid">
                <div class="doctor-overlay">
                  <div class="social-links">
                    <a href="#!"><i class="bi bi-linkedin"></i></a>
                    <a href="#!"><i class="bi bi-envelope"></i></a>
                    <a href="#!"><i class="bi bi-phone"></i></a>
                  </div>
                </div>
              </div>
              <div class="doctor-content">
                <h4>Dr. Marcus Johnson</h4>
                <span class="specialty">Cardiologist</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore
                  et dolore magna aliqua.</p>
                <div class="doctor-meta">
                  <div class="experience">
                    <i class="bi bi-award"></i>
                    <span>15+ Years Experience</span>
                  </div>
                  <div class="department">
                    <i class="bi bi-building"></i>
                    <span>Cardiology Dept.</span>
                  </div>
                </div>
                <a href="appointment.html" class="btn-appointment">Book Appointment</a>
              </div>
            </div>
          </div> --}}

        </div>

      </div>

    </section><!-- /Doctors Section -->
@endsection
