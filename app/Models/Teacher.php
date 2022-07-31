<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Teacher extends Model
{
    use HasFactory;
    private static $teacher;
    private static $imgName;
    private static $extension;
    private static $name;
    private static $directory;
    private static $imgUrl;

    public static function getImgUrl($image)
    {
        self::$extension = $image->getClientOriginalExtension();
        self::$name      = Str::random('10');
        self::$imgName   = self::$name.'.'.self::$extension;
        self::$directory = 'teacher-images/';
        $image->move(self::$directory,self::$imgName);
        self::$imgUrl = self::$directory.self::$imgName;
        return self::$imgUrl;
    }

    public static function newTeacher($request)
    {
        self::$teacher           = new Teacher();
        self::$teacher->name     = $request->name;
        self::$teacher->email    = $request->email;
        self::$teacher->password = bcrypt($request->password);
        self::$teacher->designation   = $request->designation;
        self::$teacher->mobile   = $request->mobile;
        self::$teacher->address  = $request->address;
        self::$teacher->image    = self::getImgUrl($request->file('image'));
        self::$teacher->save();
    }

    public static function updateTeacher($request,$id)
    {
        self::$teacher           = Teacher::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$teacher->image))
            {
                unlink(self::$teacher->image);
            }
            self::$imgUrl = self::getImgUrl($request->file('image'));
        }
        else
        {
            self::$imgUrl = self::$teacher->image;
        }
        self::$teacher->name          = $request->name;
        self::$teacher->email         = $request->email;
        self::$teacher->password      = bcrypt($request->password);
        self::$teacher->designation   = $request->designation;
        self::$teacher->mobile        = $request->mobile;
        self::$teacher->address       = $request->address;
        self::$teacher->image         = self::$imgUrl;
        self::$teacher->save();
    }
    public static function deleteTeacher($id)
    {
        self::$teacher = Teacher::find($id);
        if(file_exists(self::$teacher->image))
        {
            unlink(self::$teacher->image);
        }
        self::$teacher->delete();
    }

}
