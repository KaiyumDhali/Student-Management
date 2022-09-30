<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;
use function Symfony\Component\String\s;

class Course extends Model
{
    use HasFactory;
    private static $course,$image,$imageName,$directory,$imageUrl,$extension,$message;

    public static function getImageUrl($request,$directory)
    {
        self::$image        =$request->file('image');
        self::$extension    =self::$image->getClientOriginalExtension();
        self::$imageName    ='ssmsb7_'.time().'.'.self::$extension;
        self::$image->move($directory,self::$imageName);
        return $directory.self::$imageName;

    }

    public static function addCourse($request)
    {


        self::$course =new Course();
        self::$course->teacher_id = Session::get('teacher_id');
        self::$course->title      = $request->title;
        self::$course->fee     = $request->fee;
        self::$course->starting_date  = $request->starting_date;
        self::$course->duration     = $request->duration;
        self::$course->image     = self::getImageUrl($request,'upload/course-image/');
        self::$course->description =$request->description;
        self::$course->save();

    }


    public static function newCourseOffer($request)
    {
        self::$course = Course::find($request->course_id);
        self::$course->offer_fee = $request->offer_fee;
        self::$course->banner_image = self::getImageUrl($request,'upload/course-offer-image/');
        self::$course->save();
    }

    public static function updateOffer($request)
    {
        self::$course = Course::find($request->course_id);

        if($request->file('image'))
        {

            if (file_exists(self::$course->banner_image))
            {
                unlink(self::$course->banner_image);
            }

            self::$imageUrl = self::getImageUrl($request,'upload/course-offer-image/');

        }

        else
        {
            self::$imageUrl = self::$course->image;
        }

        self::$course->offer_fee = $request->offer_fee;
        self::$course->banner_image = self::$imageUrl;
        self::$course->save();
    }




   public function teacher()
   {
       return $this->belongsTo(Teachers::class);
   }

   public static function updateCourseStatus($id)
   {
       self::$course = Course::find($id);
       if (self::$course->status == 0)
       {
           self::$course->status = 1;
           self::$message = 'course status info published successfully';
       }
       else
       {
           self::$course->status = 0;
           self::$message = 'course status info unpublished successfully';
       }
       self::$course->save();
       return self::$message;
   }

    public static function updateCourse($request,$id)
    {
        self::$course = Course::find($id);

        if($request->file('image'))
        {

            if (file_exists(self::$course->image))
            {
                unlink(self::$course->image);
            }

            self::$imageUrl = self::getImageUrl($request);

        }

        else
        {
            self::$imageUrl = self::$course->image;
        }
        self::$course->title         = $request->title;
        self::$course->fee           = $request->fee;
        self::$course->starting_date = $request->starting_date;
        self::$course->duration      = $request->duration;
        self::$course->image         = self::$imageUrl;
        self::$course->description   = $request->description;

        self::$course->save();
    }

}
