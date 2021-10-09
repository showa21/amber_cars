<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseadvertismentController extends Controller
{
    public function index () {
        return view('cadvertisement');
    }
}
