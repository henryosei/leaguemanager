<?php

namespace App\Services;

use App\Http\Requests\AuthenticateRequest;
use App\Models\User;
use Auth;

/**
 * Class AuthenticationService.
 */
class AuthenticationService
{

    private User $user;

    public function authenticate(AuthenticateRequest $request)
    {
        $credentials=["email"=>$request->email,"password"=>$request->password];
        $authenticate=Auth::attempt($credentials);
        if(!$authenticate){
            return false;
        }else{
            return $authenticate;
        }
    }
}
