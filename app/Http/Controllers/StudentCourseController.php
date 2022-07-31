<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentCourseController extends Controller
{
    private $enroll;
    private $course;
    private $result;
    public function detail($id)
    {
        $this->enroll = Enroll::find($id);
        $this->course = Course::find($this->enroll->course_id);
        $this->result =[
            'title'        => $this->course->title,
            'teacher_name' => $this->course->teacher->name,
            'start_date'   => $this->course->start_date,
            'fee'          => $this->course->fee,
            'enroll_status'=> $this->enroll->enroll_status
        ];
        return View('student.course.detail',['result' => $this->result]);
    }
}
