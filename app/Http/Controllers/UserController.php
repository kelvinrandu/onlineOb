<?php

namespace App\Http\Controllers;
use  Auth;
use App\Report_crime;
use App\Type;
use App\Notifications\RequestReceived;
use App\Admin;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Session;
use Notification;
use Charts;




class UserController extends Controller
{
  //fetches the index page
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
  }
  //fetches the success page
  public function success()
  {
      return view('client/client_sent_request');
  }
  //fetches the analytics page
  public function analytics()
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

     return view('client/client_analytics',['chart'=>$chart,'admin'=>$admin]);
  }
  //fetches the each station  info page
  public function each_station($id)
  {
           $labels = Report_crime::with('admin')->get();
           $admin= DB::table('admins')->where('id',$id)->get();
  //  $admin = Admin::with('type')->where('status',1)
  //  ->get();
    $chart = Charts::database($labels,'bar','highcharts')
               ->title('Crime rate in Nairobi')
               ->groupBy('admin_id')
                ->elementLabel('Number of reported crimes')
               // ->values([5,10,20,15,30])
              ->dimensions(1000,500)
              ->responsive(false);

     return view('client/client_analytics',['chart'=>$chart,'admin'=>$admin]);
  }

  public function get_index()
  {
    //fetch records in database to populate dropdown
    $type = Type::all();
    //$ward = Admin::all();
    $ward= DB::table('admins')->where('status',0)->get();


     return \View::make('client/make_request',array('type' => $type ),array('ward' => $ward ));

  }

  public function create(Request $request)
  {
    $user_id= Auth::user()->id;
    //validate the id number against the name
    $this->validate($request,[
      'phone' => 'required|exists:identifications,id_number'
    ]);
    Report_crime::create(array(
        'user_id'=>$user_id,
        'admin_id'=>Input::get('country'),
        'phonenumber'=>Input::get('city'),
        'idNo'=>Input::get('phone'),
        'date'=>Input::get('gender'),
        'type_id'=>Input::get('fullname'),
        'status'=>0,
        'crime_description'=>Input::get('remarks')

    ));
  // dd(Input::all() );
  $user = User::find($user_id);
  $user->notify(new RequestReceived() );

      return redirect()->route('home.dashboard')->with('message','Request posted succesfull');
  }

}
