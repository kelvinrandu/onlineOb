<?php

namespace App\Http\Controllers;
use  Auth;
use App\Report_crime;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminLoginController;

class UserController extends Controller
{
  public function create()
  {
      $crime = new Crime;

      $crime->username = Input::get('username');
      $crime->email = Input::get('email');
      $crime->password = Hash::make(Input::get('password'));
      $user->save();

      return Redirect::back();
  }

}
