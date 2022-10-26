<?php

namespace App\Http\Controllers\Apis\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponses;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    use ApiResponses;
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $admin = $request->user('sanctum');
        return $this->data(compact('admin'));
    }
}
