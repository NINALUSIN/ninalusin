<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class LoginBasic extends Controller
{
  public function index(Request $request)
  {

    $pageConfigs = ['myLayout' => 'blank'];

    //login
    if($request->method() == 'POST')
    {
      $result = (new AuthController)->login($request);


      if(property_exists ( $result->getData() , 'access_token' )) {

        session(['user_access_token' => $result->getData()->access_token]);
        session(['user_token_type' => $result->getData()->token_type]);



        return redirect()->route('dashboard-homepage');
      }
      else{

        $pageConfigs += ['message' => $result->getData()->message];
        return view('content.authentications.auth-login-basic', ['pageConfigs' => $pageConfigs]);
      }
    }
    else{
      return view('content.authentications.auth-login-basic', ['pageConfigs' => $pageConfigs]);
    }



  }




}
