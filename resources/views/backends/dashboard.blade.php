@extends('layouts.app')

@section('content')

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Dashboard</h1>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Backends</a></li>
            <li class="current">Dashboard</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
              @include('includes.backends_sidebar')
            </div>

            <div class="col-md-9" data-aos="fade-up" data-aos-delay="100">
                <h2>Welcome to Dashboard</h2>
            </div>
        </div>

      </div>

    </section><!-- /Doctors Section -->
@endsection
