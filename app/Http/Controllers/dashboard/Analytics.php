<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\connection_test;

class Analytics extends Controller
{
  public function index()
  {

    $pageConfigs = ['variableTest' => 'Variable test successful! Change for commit.'];
    return view('content.dashboard.dashboards-analytics', ['pageConfigs' => $pageConfigs]);
  }
}
