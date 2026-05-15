<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::get();
        return view('backends.doctors.index', [
            'doctors' => $doctors
        ]);
    }

    public function create()
    {
        return view('backends.doctors.create');
    }

    public function store(Request $request)
    {
        Doctor::create($request->all());
        return redirect()->route('backends.doctors.index');
    }

    public function edit(Doctor $doctor)
    {
        return view('backends.doctors.edit', [
            'doctor' => $doctor
        ]);
    }

    public function update(Doctor $doctor, Request $request)
    {
        $doctor->update($request->all());
        return redirect()->route('backends.doctors.index');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('backends.doctors.index');
    }
}
