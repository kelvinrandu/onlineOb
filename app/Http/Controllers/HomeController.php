<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;

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
      $chart = Charts::create('line','highcharts')
                 ->title('Crime rate in Nairobi')
                ->labels(['Langata','CBD','Kamkunji','Starehe','Dagoretti'])
                ->values([5,10,20,15,30])
                ->dimensions(1000,500)
                ->responsive(false);

        return view('client/client_dashboard',['chart'=>$chart]);
      //  return view('client.client_dashboard');
    }
}
