<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;
use Session;

class TeacherController extends Controller
{
    private $teachers,$teacher;
   public function index()
   {
       return view('admin.teacher.index');
   }

    public function manage()
    {
        Session::put('id',100);
        $this->teacher = Teachers::all();
        return view('admin.teacher.manage',['teachers'=>$this->teacher]);
    }
    public function insert(Request $request)
    {
        Teachers::addTeachers($request);
        return redirect('teacher/add')->with('message','Teachers assign successes');
    }

    public function edit($id)
    {
        $this->teacher = teachers::find($id);
        return view('admin.teacher.TeacherUpdate',['teacher' => $this->teacher]);
    }

    public function update(Request $request,$id)
    {
        Teachers::updateTeacher($request,$id);
        return view('admin.teacher.index');
    }

    public function delete($id)
    {
        Teachers::deleteTeacher($id);
        return redirect('teacher/manage')->with('message','Student info Delete successfully.');

    }


}
