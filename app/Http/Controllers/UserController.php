<?php

namespace App\Http\Controllers;
use  Auth;
use App\Report_crime;
use App\Type;
use App\Notifications\RequestReceived;
use App\Admin;
use App\User;
use App\Station_contact;
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
           $admin= DB::table('admins')->where('status',0)->get();


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
           $admin= DB::table('admins')->where('status',0)->get();

           $chart = Charts::database($labels,'bar','highcharts')
               ->title('Crime rate in Nairobi')
               ->groupBy('admin_id')
                ->elementLabel('Number of reported crimes')
               // ->values([5,10,20,15,30])
              ->dimensions(1000,500)
              ->responsive(false);

     return view('client/client_analytics',['chart'=>$chart,'admin'=>$admin]);
  }
  //fetches  preferences
  public function preference($id)
  {

      $admin_id=$id;
      $admin= DB::table('admins')->where('id',$admin_id)->get();
      $admin_name=$admin[0]->station_name;



   return view('client/client-preferrences',['admin_id'=>$admin_id,'admin'=>$admin_name]);




  }
  //fetches the each station  info page
  public function each_station($id)
  {
           $labels = Report_crime::with('admin')->where('admin_id',$id)->get();
           $type = Type::all();
           $admin= Station_contact::with('admin')->where('admin_id',$id)->get();



           $chart = Charts::database($labels ,'bar','highcharts')
               ->title('Crime rate ')
               ->groupBy('type_id')
                ->elementLabel('frequency of the crime')
               // ->values([5,10,20,15,30])
              ->dimensions(1000,500)
              ->responsive(false);

     return view('client/client-each-station',['chart'=>$chart,'admin'=>$admin,'labels'=>$labels,'type'=>$type]);


  }

//  view trend
  public function station_trend($id)
  {
            $admin_id=$id;
            $admin= DB::table('admins')->where('id',$admin_id)->get();
            $admin_name=$admin[0]->station_name;


     return view('client/client-station-trend',['admin'=>$admin_name]);


  }
  //  view todays crime
    public function today($id)
    {
       $admin_id=$id;
       $admin= DB::table('admins')->where('id',$admin_id)->get();
       $admin_name=$admin[0]->station_name;

       return view('client/client-station-today',['admin'=>$admin_name]);


    }
//fetches  each station contact
  public function contacts($id)
  {

       $admin_id=$id;
       $admin= DB::table('admins')->where('id',$admin_id)->get();
       $admin_name=$admin[0]->station_name;


     return view('client/client-station-contact',['admin'=>$admin_name]);


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
