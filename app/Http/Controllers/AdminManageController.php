<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class AdminManageController extends Controller
{
    private $courses ,$message,$offerCourses;
    public function manageCourse()
    {
//        $this->courses = Course::all();
        $this->courses = Course::orderBy('id','desc')->take(50)->get();

        return view('admin.course.manage',['courses'=>$this->courses]);
    }

    public function detailsCourse($id)
    {
        $this->courses = Course::find($id);
        return view('admin.course.details',['courses'=>$this->courses]);
    }

    public function updateStatus($id)
    {
        $this->message = Course::updateCourseStatus($id);
        return redirect('/admin/manage-course')->with('message',$this->message);
    }
    public function manageCourseOffer()
    {
        $this->courses = Course::where('status',1)->orderBy('id','desc')->get();
        $this->offerCourses = Course::where('status',1)->where('offer_fee','>',0)->orderBy('id','desc')->get();
        return view('admin.course.courseOffer',[
            'courses'=>$this->courses,
            'offerCourses'=>$this->offerCourses,
            ]);
    }
    public function createCourseOffer(Request $request)
    {

      Course::newCourseOffer($request);
      return redirect('admin/manage-course-offer')->with('message','new course offer create');
    }

    public function courseOfferEdit($id)
    {
        $this->courses = Course::where('status',1)->orderBy('id','desc')->get();
        $this->courses = Course::find($id);
        return view('admin.course.edit_offer',['courses'=>$this->courses,'single_course'=>$this->courses,]);
    }
    public function courseOfferUpdate(Request $request)
    {
        Course::updateOffer($request);
        return redirect('admin/manage-course-offer')->with('message','succesfull');
    }
}
