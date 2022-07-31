<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    private $teachers;
    private $teacher;
    public function add()
    {
        return View('admin.teacher.add');
    }
    public function manage()
    {
        $this->teachers = Teacher::all();
        return View('admin.teacher.manage',['teachers'=>$this->teachers]);
    }
    public function create(Request $request)
    {
        $request->validate([
            'name'       => 'required',
            'email'      => 'email:rfc,dns|unique:teachers,email',
            'password'   => 'required|min:6',
            'image'      => 'required|image',
            'designation'=> 'required'
        ],[
            'name.required'=>'Vai naam de joldi'
        ]);

        Teacher::newTeacher($request);
        return redirect('/add-teacher')->with('message','teacher info create successfully');
    }

    public function edit($id)
    {
        $this->teacher = Teacher::find($id);
        return view('admin.teacher.edit',['teacher'=>$this->teacher]);
    }

    public function delete($id)
    {
        Teacher::deleteTeacher($id);
        return redirect('/manage-teacher')->with('message','teacher info delete successfully');
    }
    public function update(Request $request,$id)
    {
        Teacher::updateTeacher($request,$id);
        return redirect('/manage-teacher')->with('message','teacher info update successfully');
    }

}
