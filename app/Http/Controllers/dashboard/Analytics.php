<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\connection_test;

class Analytics extends Controller
{
  public function index()
  {
    $connection_test = connection_test::all();;
    $pageConfigs = ['variableTest' => 'Variable test successful! Change for commit.', 'connection_test'=>$connection_test];
    return view('content.dashboard.dashboards-analytics', ['pageConfigs' => $pageConfigs]);
  }
}
