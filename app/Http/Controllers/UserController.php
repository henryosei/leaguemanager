<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        $users=User::all();
        return view("settings.users",["users"=>$users]);
    }

    public function createUser()
    {
        return view("settings.createUser");
    }

    public function postCreateUser(Request $request)
    {
        User::createUser($request);
        return redirect("/system/users");
    }
}
