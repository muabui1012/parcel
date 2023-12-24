<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Contracts\Providers\Auth;

class UserController extends Controller
{
    //
    public function idenUser(Request $request) {
        //$token = $request->bearerToken();
        $token = JWTAuth::getToken();
        $apy = JWTAuth::getPayload($token)->toArray();
        $user = auth()->user();
        return response() ->json([
            'token' => $apy,
            'user' => $user
        ]);
    }
}
