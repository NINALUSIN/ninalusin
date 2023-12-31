<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
  /**
  * Create user
  *
  * @param  [string] name
  * @param  [string] email
  * @param  [string] password
  * @param  [string] password_confirmation
  * @return [string] message
  */

  public function test(Request $request)
  {


          return response()->json([
              'message' => 'Successfully tested API call!'
          ], 201);

  }

  public function register(Request $request)
  {

    $validated = $request->validate([
          'name' => 'required|string',
          'email' => 'required|string|email|unique:users',
          'password' => 'required|string|',
          'c_password'=>'required|same:password',
      ]);


      $user = new User([
          'name' => $request->name,
          'email' => $request->email,
          'password' => bcrypt($request->password)
      ]);

      if($user->save()){
          return response()->json([
              'message' => 'Uspešna registracija uporabnika!'
          ], 201);
      }else{
          return response()->json(['error'=>'Vpišite pravilne vrednosti']);
      }
    }


  /**
  * Login user and create token
  *
  * @param  [string] email
  * @param  [string] password
  * @param  [boolean] remember_me
  * @return [string] access_token
  * @return [string] token_type
  * @return [string] expires_at
  */
  public function login(Request $request)
  {


    $validated = $request->validate([
      'email' => 'required|string|email',
      'password' => 'required|string'
    ]);


    $credentials = request(['email', 'password']);

    if(!Auth::attempt($credentials))
    {

      return response()->json([
      'message' => 'Prijava ni uspešna.'
      ], 401);


    }

    $user = $request->user();
    $tokenResult = $user->createToken('Personal Access Token');
    $token = $tokenResult->plainTextToken;


    return response()->json([
      'access_token' => $token,
      'token_type' => 'Bearer',
    ]);


  }


  /**
* Get the authenticated User
*
* @return [json] user object
*/
public function user(Request $request)
{
  Log::info($request);
  $user = Auth::user();
  return response()->json($user);
}

/**
* Logout user (Revoke the token)
*
* @return [string] message
*/
public function logout(Request $request)
{
  $request->user()->tokens()->delete();

  return response()->json([
    'message' => 'Successfully logged out'
  ]);
}

}
