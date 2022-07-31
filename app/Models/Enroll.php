<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;
    private static $enroll;

    public static function newEnroll($request,$courseId,$studentId)
    {
        self::$enroll = new Enroll();
        self::$enroll->course_id = $courseId;
        self::$enroll->student_id = $studentId;
        self::$enroll->payment_type = $request->payment_type;
        self::$enroll->enroll_date =date('Y-m-d');
        self::$enroll->enroll_timestamp =strtotime(date('Y-m-d'));
        self::$enroll->save();
        return self::$enroll;
    }
}
