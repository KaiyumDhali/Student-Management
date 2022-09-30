<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    private $course;
    public function index($id)
    {
        $this->course = Course::find($id);
        return view('website.enroll.index',['id'=>$this->course]);
    }

    public function enrol(Request $request,$id)
    {
       return $request->all();
    }
}
