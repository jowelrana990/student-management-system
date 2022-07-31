<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class UserModuleController extends Controller
{
    private $users;
    private $user;
    public function add()
    {
        return View('admin.user.add');
    }
    public function manage()
    {
        $this->users = User::all();
        return View('admin.user.manage',['users'=>$this->users]);
    }
    public function save(Request $request)
    {
        User::saveUser($request);
        return redirect('/add-user')->with('message','Save User info Successfully');
    }
    public function edit($id)
    {
        $this->user = User::find($id);
        return View('admin.user.edit',['user'=>$this->user]);
    }
    public function delete($id)
    {
        User::deleteUser($id);
        return redirect('/manage-user')->with('message','User info delete successfully');
    }
    public function update(Request $request,$id)
    {
        User::updateUser($request,$id);
        return redirect('/manage-user')->with('message',' User info Save Successfully');

    }
}
