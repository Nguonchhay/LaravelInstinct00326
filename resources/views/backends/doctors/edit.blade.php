@extends('layouts.app')

@section('content')

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Edit Doctor : {{ $doctor->name }}</h1>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Backends</a></li>
            <li class="current">Doctor</li>
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
                <h2>Edit Doctor</h2>
                <form method="POST" action="{{ route('backends.doctors.update', $doctor->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="name" name="name" required value="{{ $doctor->name }}">
                    </div>
                    <div class="mb-3">
                      <label for="profile" class="form-label">Profile</label>
                      <input type="text" class="form-control" id="profile" name="profile" value="{{ $doctor->profile }}">
                    </div>
                    <div class="mb-3">
                      <label for="department" class="form-label">Department</label>
                      <input type="text" class="form-control" id="department" name="department" required value="{{ $doctor->department }}">
                    </div>
                    <div class="mb-3">
                      <label for="specialist" class="form-label">Specialist</label>
                      <input type="text" class="form-control" id="specialist" name="specialist" required value="{{ $doctor->specialist }}">
                    </div>
                    <div class="mb-3">
                      <label for="short_bio" class="form-label">Short Bio</label>
                      <input type="text" class="form-control" id="short_bio" name="short_bio" required value="{{ $doctor->short_bio }}">
                    </div>
                    <div class="mb-3">
                      <label for="years_of_experience" class="form-label">Years of Experience</label>
                      <input type="text" class="form-control" id="years_of_experience" name="years_of_experience" required value="{{ $doctor->years_of_experience }}">
                    </div>
                    <div class="mb-3">
                      <label for="phone" class="form-label">Phone</label>
                      <input type="text" class="form-control" id="phone" name="phone" value="{{ $doctor->phone }}">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" value="{{ $doctor->email }}">
                    </div>
                    <div class="mb-3">
                      <label for="linked_in" class="form-label">LinkedIn</label>
                      <input type="text" class="form-control" id="linked_in" name="linked_in" value="{{ $doctor->linked_in }}">
                    </div>
                    <a href="{{ route('backends.doctors.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>

      </div>

    </section><!-- /Doctors Section -->
@endsection
