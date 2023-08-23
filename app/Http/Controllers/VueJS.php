<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\connection_test;

class VueJS extends Controller
{
  public function index()
  {

    return view('content.VueJS');

  }
}
