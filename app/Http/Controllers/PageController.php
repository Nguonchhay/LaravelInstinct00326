<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use PhpParser\Comment\Doc;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function doctors()
    {
        $doctors = Doctor::get();
        dd($doctors);
        return view('pages.doctors', [
            'doctors' => $doctors
        ]);
    }
}
