<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest:admin');
  }
   public function showLoginForm()
   {
     return view('auth.admin-login');
   }

   public function login(Request $request)
   {
     /*validate the form data*/
     $this->validate($request , [
       'code' => 'required|string',
       'password'=>'required|min:6'
      ]);

      /*Attempts to log the user in*/
      if(  Auth::guard('admin')->attempt([ 'code' => $request-> code, 'password' => $request-> password ] , $request->remember)) {
          /*if succesful then redirect to admin dashboard*/
          return redirect()->intended(route('admin.dashboard'));
      }
      /*if attempt unsuccessful then redirects back to the login with the form data */
      return redirect()->back()->withInput($request->only('code', 'remember'));

   }
}
