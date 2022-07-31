<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminCourseController extends Controller
{
    private $courses;
    private $course;
    private $message;
    public function manage()
    {
        $this->courses = Course::all();
        return View('admin.course.manage',['courses'=>$this->courses]);
    }
    public function detail($id)
    {
        $this->course = Course::find($id);
        return View('admin.course.detail',['course'=>$this->course]);
    }
    public function status($id)
    {
        $this->message = Course::getStatus($id);
        return redirect()->back()->with('message',$this->message);
    }
}
