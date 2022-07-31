<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class StudentAuthController extends Controller
{
    public function logout()
    {
        Session::forget('student_id');
        Session::forget('student_name');
        return redirect('/');
    }
}
