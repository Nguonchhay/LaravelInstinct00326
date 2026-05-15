@extends('layouts.app')

@section('content')

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Doctors</h1>
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
                <h2>Doctor List</h2>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Profile</th>
                      <th scope="col">Department</th>
                      <th scope="col">Specialist</th>
                      <th>
                        <a class="btn btn-primary" href="{{ route('backends.doctors.create') }}" class="btn btn-primary btn-sm">New Doctor</a>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($doctors as $doctor)
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $doctor->name }}</td>
                        <td>
                          <!-- Button trigger modal -->
                          <img src="{{ $doctor->profile }}" alt="{{ $doctor->name }}" class="w-25" data-bs-toggle="modal" data-bs-target="#modalDoctor{{ $doctor->id }}">
                          
                          <!-- Modal -->
                          <div class="modal fade" id="modalDoctor{{ $doctor->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="modalDoctorLabel{{ $doctor->id }}">Profile of: {{ $doctor->name }}</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <img src="{{ $doctor->profile }}" alt="{{ $doctor->name }}" class="img-fluid">
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td>{{ $doctor->department }}</td>
                        <td>{{ $doctor->specialist }}</td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Doctor action">
                            <a href="{{ route('backends.doctors.edit', $doctor->id) }}" class="btn btn-default">Edit</a>
                            @can('delete-doctor')
                              <form action="{{ route('backends.doctors.destroy', $doctor->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                            @endcan
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>

      </div>

    </section><!-- /Doctors Section -->
@endsection
