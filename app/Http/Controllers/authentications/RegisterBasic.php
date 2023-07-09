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
    $pageConfigs = ['myLayout' => 'blank', 'test'=>'RegisterBasic@index'];


    if($request->method() == 'POST')
    {
      Log::debug('RegisterBasic@index/POST');
      $result = (new AuthController)->register($request);
      Log::debug($result);
      return redirect()->route('dashboard-homepage');
    }
    else{

      return view('content.authentications.auth-register-basic', ['pageConfigs' => $pageConfigs]);
    }



  }
}
