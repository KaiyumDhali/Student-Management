<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $course,$offerCourses;
    public function index()
    {
        return view('website.home.index',[
            'courses'=>Course::where('status',1)->orderBy('id','desc')->take(3)->get(),
            'offerCourses'=> Course::where('offer_fee','>',0)->orderBy('id','desc')->get(),
        ]);
    }
    public function about()
    {
        return view('website.about.about');
    }
    public function courses()
    {
        return view('website.courses.courses');
    }
    public function contact()
    {
        return view('website.contact.contact');
    }
    public function auth()
    {
        return view('website.auth.auth');
    }

    public function details($id)
    {

        $this->course = Course::find($id);

        return view('website.courses.details',['course'=>$this->course]);
    }


}
