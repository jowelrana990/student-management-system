<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Session;

class CourseController extends Controller
{
    private $courses;
    private $course;

    public function add()
    {
        return View('teacher.course.add');
    }
    public function manage()
    {
        $this->courses = Course::where('teacher_id',Session::get('teacher_id'))->get();
        return View('teacher.course.manage',['courses'=>$this->courses]);
    }
    public function create(Request $request)
    {
        Course::newCourse($request);
        return redirect()->back()->with('message','courses data save successfully');
    }
    public function detail($id)
    {
        $this->course = Course::find($id);
        return View('teacher.course.detail',['course'=>$this->course]);
    }
    public function edit($id)
    {
        $this->course = Course::find($id);
        return View('teacher.course.edit',['course'=>$this->course]);
    }
    public function update(Request $request,$id)
    {
        Course::courseUpdate($request,$id);
        return redirect('/manage-course')->with('message','course info update successfully');
    }
    public function delete($id)
    {
        Course::courseDelete($id);
        return redirect('/manage-course')->with('message','course info delete successfully');
    }
}
