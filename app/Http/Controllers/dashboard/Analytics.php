<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\connection_test;

class Analytics extends Controller
{
  public function index()
  {


    return view('content.dashboard.dashboards-analytics');
  }
}
