<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateRequest;
use App\Services\AuthenticationService;
use Illuminate\Http\Request;

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
            return redirect("/");
        }
        return redirect()->back()->with(["message" => "Invalid username or password"]);
    }
}
