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
             $admin= DB::table('admins')->where('status',1)->get();
    //  $admin = Admin::with('type')->where('status',1)
    //  ->get();


      $chart = Charts::database($labels,'bar','highcharts')
                 ->title('Crime rate in Nairobi')
                 ->groupBy('admin_id')
                  ->elementLabel('Number of reported crimes')
                 // ->values([5,10,20,15,30])
                ->dimensions(1000,500)
                ->responsive(false);

       return view('client/client_dashboard',['chart'=>$chart,'admin'=>$admin]);
        // return count($labels);
    }
}
