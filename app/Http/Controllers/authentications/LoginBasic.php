<?php

namespace App\Http\Controllers\authentications;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginBasic extends Controller
{
  public function index()
  {
    $test = new Request();
    $test->replace(['test' => 'Test variable']);


    $result = (new AuthController)->test($test);
    Log::debug($result);

    $pageConfigs = ['myLayout' => 'blank'];
    return view('content.authentications.auth-login-basic', ['pageConfigs' => $pageConfigs]);
  }
}
