<?php

namespace App\Http\Controllers\Apis\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Apis\Auth\LoginRequest;
use App\Models\Admin;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    use ApiResponses;
    public function login(LoginRequest $request)
    {
        $admin = Admin::where('email',$request->email)->first();
        if(! $admin || !  Hash::check($request->password,$admin->password)){
            return $this->error([
                'email'=>'The provided credentials are incorrect.'
            ],statusCode:401);
        }
        $admin->token = "Bearer ". $admin->createToken($request->os.'-'.$request->device_name)->plainTextToken;
        return $this->data(compact('admin'));
    }

    public function logoutCurrentToken(Request $request)
    {
        $request->user('sanctum')->currentAccessToken()->delete();
        return $this->success('Your Current Acceess Token has been destroyed successfully');
    }

    public function logoutSpecificToken(Request $request)
    {
        $request->user('sanctum')->tokens()->where('id',$this->getTokenId($request->header('other-device-token')))->delete();
        return $this->success('This Acceess Token has been destroyed successfully');
    }


    public function logoutAllTokens(Request $request)
    {
        $request->user('sanctum')->tokens()->delete();
        return $this->success('All Of Your Acceess Token has been destroyed successfully');
    }

    private function getTokenId(string $token) :int
    {
        return explode(' ',explode('|',$token)[0])[1];
    }
}
