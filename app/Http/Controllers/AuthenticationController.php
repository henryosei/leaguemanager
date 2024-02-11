<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateRequest;
use App\Services\AuthenticationService;
use Illuminate\Http\Request;
use Auth;

class AuthenticationController extends Controller
{
    private AuthenticationService $service;

    /**
     * @param AuthenticationService $service
     */
    public function __construct(AuthenticationService $service)
    {
        $this->service = $service;
    }


    public function login()
    {
        return view("login");
    }

    public function authentication(AuthenticateRequest $request)
    {


        if ($this->service->authenticate($request)) {
            return redirect("/dashboard");
        }
        return redirect()->back()->with(["message" => "Invalid username or password"]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/schedule/users");
    }
}
