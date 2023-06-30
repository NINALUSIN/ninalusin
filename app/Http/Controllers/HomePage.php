<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\connection_test;

class HomePage extends Controller
{
  public function index()
  {
    $connection_test = connection_test::all();;
    $pageConfigs = ['variableTest' => 'Variable test successful! Change for commit.', 'connection_test'=>$connection_test];
    return view('content.homepage', ['pageConfigs' => $pageConfigs]);
  }
}
