<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Http\Resources\DoctorResource;

class DoctorApiController extends Controller
{
    public function index()
    {
        $doctors = Doctor::get();
        return $this->sendSuccess(DoctorResource::collection($doctors));
    }

    public function store(Request $request)
    {
        Doctor::create($request->all());
        return response()->json(['message' => 'Doctor created successfully!']);
    }

    public function update(Doctor $doctor, Request $request)
    {
        $doctor->update($request->all());
        return response()->json(['message' => 'Doctor updated successfully!']);
    }

    public function destroy(Doctor $doctor)
    {
        if (!auth()->user()->can('delete-doctor')) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }
        $doctor->delete();
        return response()->json(['message' => 'Doctor deleted successfully!']);
    }
}
