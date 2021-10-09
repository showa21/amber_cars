<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        print_r(route('about'));
        return view('courses.index');
    }

    public function about(){
        return 'This is the about us page';

       
    }

    public function show($name){
        $data= [
            'course1'=> 'Social',
            'course2'=> 'Maths' 
        ];
        return view('courses.index',[
            'courses'=>$data[$name]
        ]);
    }
}
