<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Session;

class CourseController extends Controller
{
    private $courses,$course;
   public function index()
   {
       return view('teacher.course.add');
   }

    public function manage()
    {
        $this->course = Course::where('teacher_id',Session::get('teacher_id'))->get();
        return view('teacher.course.manage',['courses' => $this->course]);
   }

    public function insert(Request $request)
    {
        Course::addCourse($request);
        return redirect('course/add')->with('message','Course assign successes');
    }

    public function edit($id)
    {
        $this->course = Course::find($id);
        return view('teacher.course.update',['courses' => $this->course]);
    }
    public function details($id)
    {
        $this->course = Course::find($id);
        return view('teacher.course.details',['course' => $this->course]);
    }
    public function update(Request $request,$id)
    {
        Course::updateCourse($request,$id);
        return view('teacher.course.update');
    }
}
