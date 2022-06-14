<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function index()
    {
        return view('scholarship.index');
    }

    public function show()
    {
        return view('scholarship.show');
    }
}
