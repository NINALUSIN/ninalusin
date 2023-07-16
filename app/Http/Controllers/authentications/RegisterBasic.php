<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RegisterBasic extends Controller
{
  public function index(Request $request)
  {
    $pageConfigs = ['myLayout' => 'blank'];


    if($request->method() == 'POST')
    {

      $result = (new AuthController)->register($request);

      return redirect()->route('auth-login-basic');
    }
    else{

      return view('content.authentications.auth-register-basic', ['pageConfigs' => $pageConfigs]);
    }



  }
}
