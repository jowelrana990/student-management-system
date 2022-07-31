<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class EnrollController extends Controller
{
    private $student;
    private $enroll;
    public function enroll($id)
    {
        return View('website.enroll.enroll',['id'=>$id]);
    }
    public function create(Request $request,$id)
    {
        $this->student = Student::newStudent($request);
        $this->enroll = Enroll::newEnroll($request,$id,$this->student->id);
        Session::put('student_id',$this->student->id);
        Session::put('student_name',$this->student->name);
        return redirect('/course-registration-detail/'.$this->enroll->id);
    }
}
