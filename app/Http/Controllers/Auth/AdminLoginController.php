<?php

namespace App\Http\Controllers\Auth;

use  Auth;
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
        //  return redirect()->intended(route('admin.dashboard'));
        foreach ($this->guard()->user()->roles as $role){
          if($role->name == 'admin'){
            return redirect('admin/home');
          }elseif($role->name == 'detective'){
            return redirect('admin/detective');
          }
        }


      }
      /*if attempt unsuccessful then redirects back to the login with the form data */
      return redirect()->back()->withInput($request->only('code', 'remember'));

   }
   protected function sendLoginResponse(Request $request)
   {
       $request->session()->regenerate();

       $this->clearLoginAttempts($request);

      foreach ($this->guard()->user()->role as $role){
        if($role->name == 'admin'){
          return redirect('admin/home');
        }elseif($role->name == 'detective'){
          return redirect('admin/detective');
        }
      }


   }
}
