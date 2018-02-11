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
use GMaps;
use Carbon;
 use Mapper;




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
  //my request
  public function myRequest($id)
  {
     //       $labels = Report_crime::with('admin')->get();
     //       $admin= DB::table('admins')->where('status',0)->get();
     //
     //       $chart = Charts::database($labels,'bar','highcharts')
     //           ->title('Crime rate in Nairobi')
     //           ->groupBy('admin_id')
     //            ->elementLabel('Number of reported crimes')
     //           // ->values([5,10,20,15,30])
     //          ->dimensions(1000,500)
     //          ->responsive(false);
     //
     // return view('client/client_analytics',['chart'=>$chart,'admin'=>$admin]);
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
           $labels = Report_crime::with('admin')->where('admin_id',$id)->get();
           $type = Type::all();

            $chart = Charts::database($labels ,'bar','highcharts')
                ->title('Crime rate ')
                ->groupBy('type_id')
                 ->elementLabel('frequency of the crime')
                // ->values([5,10,20,15,30])
               ->dimensions(1000,500)
               ->responsive(false);


     return view('client/client-station-trend',['chart'=>$chart,'type'=>$type]);


  }
  //  view todays crime
    public function today($id)
    {

       $type = Type::all();
       $admin= DB::table('admins')->where('id',$id)->get();
       $users = Report_crime::whereDate('created_at', '>=', \Carbon::today()->toDateString())
       ->where('admin_id',$id)->get();
       $chart = Charts::database($users ,'bar','highcharts')
           ->title('Crime rate ')
           ->groupBy('type_id')
            ->elementLabel('frequency of the crime')
           // ->values([5,10,20,15,30])
          ->dimensions(1000,500)
          ->responsive(false);


        return view('client/client-station-today',['chart'=>$chart,'admin'=>$admin,'type'=>$type]);



    }
//fetches  each station contact
  public function contacts($id)
  {
         $contacts= Station_contact::where('admin_id',$id)->get();
          $contact = Admin::where('id',$id)->get();

         Mapper::map($contacts[0]->longitude, $contacts[0]->latitude);



     return view('client/client-station-contact',['contact'=>$contact,'contacts'=>$contacts ]);


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
      'idNo' => 'required|exists:identifications,id_number',
      'date' => 'date|before:tomorrow'
    ]);
    Report_crime::create(array(
        'user_id'=>$user_id,
        'admin_id'=>Input::get('country'),
        'phonenumber'=>Input::get('phone_number'),
        'idNo'=>Input::get('idNo'),
        'date'=>Input::get('date'),
        'type_id'=>Input::get('fullname'),
        'location'=>Input::get('location'),
        'status'=>0,
        'crime_description'=>Input::get('remarks')

    ));


   $user = User::find($user_id);
   $user->notify(new RequestReceived() );

      return redirect()->route('home.dashboard')->with('message','Request posted succesfull');
  }

  //search function
  public function search(Request $request)
  {

     $searchterm = $request['search'];
    //if the user enters a keyword then use that keyword to search
     if ($searchterm){

        $admin=[];

       $results = Report_crime::with('user')
       ->leftJoin('type', 'type.id', '=', 'report_crimes.type_id')
       ->where('location', 'LIKE', '%'. $searchterm .'%')
       ->orWhere('type.name', 'LIKE', '%'. $searchterm .'%')
       ->get();

  // if no record is found then redirect the user back
       if($results->isEmpty()){

              return redirect()->back()->with('message','no record found');

        }
  // if record is found then format it into a chart and send it to view
        $chart = Charts::database($results,'bar','highcharts')
         ->title('Crime rate in Nairobi')
         ->groupBy('admin_id')
          ->elementLabel('Number of reported crimes')
           // ->values([5,10,20,15,30])
          ->dimensions(1000,500)
          ->responsive(false);

          return view('client/client-search',['chart'=>$chart,'admin'=>$admin]);

     }
       // if  no keyword was passed by the user then redirect back and notify the user
          return redirect()->back()->with('message','no search term found');
  }
}
