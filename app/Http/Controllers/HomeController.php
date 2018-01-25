<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\Type;
use App\User;
use App\Admin;
use App\Report_crime;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $labels = Report_crime::with('admin')->get();
             $admin= DB::table('admins')->where('status',0)->get();
    //  $admin = Admin::with('type')->where('status',1)
    //  ->get();



       return view('client/client_dashboard',['admin'=>$admin]);
        // return count($labels);
    }
}
