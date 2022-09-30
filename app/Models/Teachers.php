<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;

    private static $teacher,$image,$imageName,$directory,$imageUrl,$extension;

    public static function getImageUrl($request)
    {
        self::$image        =$request->file('image');
        self::$extension    =self::$image->getClientOriginalName();
        self::$imageName    ='ssmsb7_'.time().'.'.self::$extension;
        self::$directory    ='admin/assets/images/teachers_image/';
        self::$image->move(self::$directory,self::$imageName);
        return self::$directory.self::$imageName;

    }

    public static function addTeachers($request)
    {


        self::$teacher =new Teachers();
        self::$teacher->name      = $request->name;
        self::$teacher->email     = $request->email;
        self::$teacher->password  = bcrypt($request->password);
        self::$teacher->phone     = $request->phone;
        self::$teacher->image     = self::getImageUrl($request);

        self::$teacher->save();

    }


    public static function updateTeacher($request,$id)
    {
        self::$teacher = Teachers::find($id);

        if($request->file('image'))
        {

            if (file_exists(self::$teacher->image))
            {
                unlink(self::$teacher->image);
            }

            self::$imageUrl = self::getImageUrl($request);

        }

        else
        {
            self::$imageUrl = self::$teacher->image;
        }
        self::$teacher->name      = $request->name;
        self::$teacher->email       = $request->email;
        if(isset($request->password))
        {
            self::$teacher->password  = $request->password;
        }
        self::$teacher->phone      = $request->phone;
        self::$teacher->image     = self::$imageUrl;

        self::$teacher->save();
    }

    public static function deleteTeacher($id)

    {
        self::$teacher = Teachers::find($id);

        if (file_exists(self::$teacher->image))

        {
            unlink(self::$teacher->image);
        }

        self::$teacher->delete();
    }
}
