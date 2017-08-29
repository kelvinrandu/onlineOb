<?php

namespace App\Http\Controllers;
use  Auth;
use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\AdminLoginController;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //  $admin = Admin::findOrFail($userid);

        //return $admin;


        $id = Auth::id();
          $admin = Admin::where('id', $id)->first();
          if($admin->is_detective()){

        //return $admin ;
        return redirect()->intended(route('detective.dashboard'));
      }
       return view('admin/admin_dashboard');
      }

}
