<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userManage()
    {
        return view('admin.user.user-manage',[
            'users' => User::all(),
        ]);
    }
    public function userEdit($id)
    {
        $user = User::find($id);
        return view('admin.user.user-edit',[
            'user' => $user,
        ]);
    }
}
