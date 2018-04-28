<?php

namespace App\Http\Controllers;
use  Auth;
use App\Report_crime;
use App\Statement;
use App\Court_case;
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
           $type = Type::all();

           $chart = Charts::database($labels,'bar','highcharts')
               ->title('Crime rate in Nairobi')
               ->groupBy('admin_id')
                ->elementLabel('Number of reported crimes')
               // ->values([5,10,20,15,30])
              ->dimensions(1000,500)
              ->responsive(false);

     return view('client/client_analytics',['chart'=>$chart,'admin'=>$admin,'type'=>$type]);
  }

  //my request
  public function allRequest()
  {
           $id = Auth::id();
            $requests = Report_crime::with('type')
            ->where('user_id',$id)->get();
            $count = count($requests);

     //       $admin= DB::table('admins')->where('status',0)->get();

      return view('client/client-view-all-requests',['requests'=> $requests ,'count'=>$count]);
  }
  //my request
  public function eachRequest($id)
  {
     //       $id = Auth::id();
            $requests = Report_crime::with('type')
            ->where('id',$id)->get();
     //
     // //       $admin= DB::table('admins')->where('status',0)->get();
     //
    return view('client/client-view-each-request',['requests'=> $requests ,'admin'=>$id]);

  }
  public function eachAssignedRequest($id)
  {
     //      $id = Auth::id();
            $requests = Report_crime::with('type')
            ->where('id',$id)->get();
            $statements = Statement::with('admin')
            ->where('crime_id', $id)
            ->get();
            $case = Court_case::with('contacts')
            ->where('report_crimes_id',$id)
            ->first();

//             if($case->contacts->isEmpty()){
                return view('client/client-view-each-assigned-request',['requests'=> $requests ,'statements'=>  $statements,'case'=>  $case]);
//
//             }
//
// return view('client/client-view-each-request',['requests'=> $requests ,'admin'=>$id]);



  }
  //fetches  preferences
  public function preference($id)
  {

      $admin_id=$id;
      $admin= DB::table('admins')->where('id',$admin_id)->get();
      $url = Station_contact::with('admin')->where('admin_id',$admin_id)->value('url');
      $all = Report_crime::with('type')
      ->where('admin_id',$admin_id)->get();
      $closed = Report_crime::with('type')
      ->where('admin_id',$admin_id)->where('status',3)->get();
      $allcount=count($all);
      $closedcount=count($closed);
        $rate=  ceil(($closedcount/$allcount)*100);

      // $url= DB::table('station_contacts')->where('admin_id',$admin_id)->value('url');
      $admin_name=$admin[0]->station_name;


 //
  return view('client/client-preferrences',['admin_id'=>$admin_id,'admin'=>$admin_name,'url'=>$url,'rate'=>$rate]);





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


// return redirect($contacts[0]->url);
// return Redirect::to('$contacts[0]->url');
  //   return view('client/client-station-contact',['contact'=>$contact,'contacts'=>$contacts ]);


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
       ->leftJoin('users', 'users.id', '=', 'report_crimes.user_id')
       ->where('location', 'LIKE', '%'. $searchterm .'%')
       ->orWhere('type.name', 'LIKE', '%'. $searchterm .'%')
       ->orWhere('users.gender', 'LIKE', '%'. $searchterm .'%')
       ->get();

  // if no record is found then redirect the user back
       if($results->isEmpty()){

              return redirect()->back()->with('message','no record found');

        }
  // if record is found then format it into a chart and send it to view
        $type = Type::all();
        $chart = Charts::database($results,'bar','highcharts')
         ->title('Crime rate in Nairobi')
         ->groupBy('admin_id')
          ->elementLabel('Number of reported crimes')
           // ->values([5,10,20,15,30])
          ->dimensions(1000,500)
          ->responsive(false);

          return view('client/client-search',['chart'=>$chart,'admin'=>$admin,'type'=>$type,'search'=>$searchterm]);

     }
       // if  no keyword was passed by the user then redirect back and notify the user
          return redirect()->back()->with('message','no search term found');
  }
}
