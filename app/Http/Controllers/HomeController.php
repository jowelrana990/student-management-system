<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $courses;
    private $course;
    private $teachers;
    public function index()
    {
        $this->courses =Course::where('status',1)->orderBy('id','desc')->get();
        $this->teachers = Teacher::all();
        return view('website.home.home',['courses'=>$this->courses,'teachers'=>$this->teachers]);
    }

    public function about()
    {
        return view('website.about.about');
    }

    public function course()
    {
        return view('website.course.course');
    }
    public function detail($id)
    {
        $this->course = Course::find($id);
        return view('website.course.detail',['course'=>$this->course]);
    }

    public function contact()
    {
        return view('website.contact.contact');
    }

    public function login()
    {
        return view('website.login.login-registration');
    }
}
