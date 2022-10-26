<?php

namespace App\Http\Controllers\Apis\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Apis\Auth\RegisterRequest;
use App\Models\Admin;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    use ApiResponses;
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RegisterRequest $request)
    {
        $admin = Admin::create( $request->safe()->only(['name', 'email','password']) );
        $admin->token = 'Bearer '.$admin->createToken($request->os . '-' .$request->device_name)->plainTextToken;
        return $this->data(compact('admin'),statusCode:201);
    }
}
