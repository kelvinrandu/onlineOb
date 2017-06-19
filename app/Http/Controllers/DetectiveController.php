<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetectiveController extends Controller
{
    public function index()
    {
      return view('admin.detective');
    }
}
