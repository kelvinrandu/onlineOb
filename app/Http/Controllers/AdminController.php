<?php

namespace App\Http\Controllers;
use  Auth;
use App\Admin;
use App\User;
use App\Type;
use App\Statement;
use App\Report_crime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminLoginController;
use Illuminate\Support\Facades\Input;
use Session;
use Charts;

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
      //  $request =Report_crime::all();
       return redirect()->intended(route('detective.dashboard'));

      }

          $id = Auth::id();
          $all = count(Report_crime::with('type')->where('admin_id',$id)->get());
          $solved = count(Report_crime::with('type')->where('status','!=' , 0)->where('admin_id',$id)->get());
          Report_crime::with('user')->where('id',$id)->get();
          $request = Report_crime::with('type')->where('status',0)
          ->where('admin_id', $id)
          ->get();
          $labels = Report_crime::with('admin')->where('admin_id',$id)->get();
          $type = Type::all();
          $ward= DB::table('admins')->where('id',$id)->get();

                  $chart = Charts::database($labels ,'bar','highcharts')
                      ->title('Crime rate ')
                      ->groupBy('type_id')
                       ->elementLabel('frequency of the crime')
                      // ->values([5,10,20,15,30])
                     ->dimensions(1000,500)
                     ->responsive(false);

     return view('admin/admin_dashboard',['request' => $request,'all' => $all,'solved' => $solved,'chart'=>$chart,'type'=>$type,'admin'=>$ward]);
      }
      //get requests from client
   public function get_requests()
   {
       $request =Report_crime::all();
       return $request;

   }

         //get  all crime reports requests from client
      public function get_reports()
      {

          $id = Auth::id();
          //get all crimes related to the station
          $requests = Report_crime::with('user')
          ->with('type')
          ->where('admin_id',$id)
          ->where('status','!=' , 0)
          ->get();
          $count= count($requests);


          $request = Report_crime::with('type')->where('status',0)
          ->where('admin_id', $id)
          ->get();
          return view('admin/admin-view-all-crimes',['request' => $request,'requests' => $requests,'count' => $count]);


      }
      //get  all crime reports requests from client
   public function get_each_report($id)
   {

            $requests = Statement::with('report_crime')
            ->where('crime_id', $id)
            ->get();
            $statement = Report_crime::with('user')
            ->with('type')
            ->where('id',$id)
            ->get();

            $request = Report_crime::with('type')->where('status',0)
            ->where('admin_id', $id)
            ->get();


   return view('admin/admin-view-each-crime',['request' => $request,'requests' => $requests,'statement' => $statement]);


   }

      public function get_request($id)
      {

      //   $request= DB::table('report_crimes')->where('id',$id)->get();
          $request=  Report_crime::with('user')->where('id',$id)->get();
          $ward= DB::table('admins')->where('status',1)->get();

         return view('admin/admin_view_request',array('request' => $request ),array('ward' => $ward ));

      }
      //get statements
      public function get_statements()
      {
          $id = Auth::id();
         $requests= DB::table('report_crimes')->where('admin_id',$id)->get();
         $request = Report_crime::with('type')->where('status',0)
         ->where('admin_id', $id)
         ->get();

         return view('admin/admin_view_requests',array('request' => $request ),array('requests' => $requests ));

      }
      //create statement
      public function create()
      {
            $id = Auth::id();
            $crime_id=Input::get('crime_id');
        Statement::create(array(
            'crime_id'=>$crime_id,
            'admin_id'=>Input::get('admin_id'),
            'ob_number'=>Input::get('ob_number'),
            'date'=>Input::get('date'),
            'status'=> 0,
            'police_number'=>Input::get('police_number'),
            'statement'=>Input::get('statement')

        ));

               $crime = Report_crime::find($crime_id);
                if($crime){
                  $crime->status =1;
                  $crime->save();

                   return redirect()->route('admin.dashboard')->with('message','Statement recorded  succesfully');

                }

                   return redirect()->back()->with('message','Statement not recorded please try again');

      }
      //search function
      public function search(Request $request)
      {

         $searchterm = $request['search'];
        //if the user enters a keyword then use that keyword to search
       if ($searchterm){

            $admin=[];
            $count=[];

           $results = Report_crime::with('user')
           ->leftJoin('type', 'type.id', '=', 'report_crimes.type_id')
            ->leftJoin('users', 'users.id', '=', 'report_crimes.user_id')
           ->where('users.fName', 'LIKE', '%'. $searchterm .'%')
           ->orWhere('users.lName', 'LIKE', '%'. $searchterm .'%')
           ->get();

      // if no record is found then redirect the user back
           if($results->isEmpty()){

                 return redirect()->back()->with('message','no record found');


            }
      // if record is found then  send it to view
      $id = Auth::id();
      //get all crimes related to the station

      $count= count($results);


      $request = Report_crime::with('type')->where('status',0)
      ->where('admin_id', $id)
      ->get();
      return view('admin/admin-view-all-crimes',['request' => $request,'requests' => $results,'count' => $count]);


         }
           // if  no keyword was passed by the user then redirect back and notify the user
              return redirect()->back()->with('message','no search term Entered');
            }
            //  view trend
  public function station_trend()
  {
           $id = Auth::id();
           $labels = Report_crime::with('admin')->where('admin_id',$id)->get();
           $type = Type::all();
           $ward= DB::table('admins')->where('id',$id)->get();
           $request = Report_crime::with('type')->where('status',0)
           ->where('admin_id', $id)
           ->get();



            $chart = Charts::database($labels ,'bar','highcharts')
                ->title('Crime rate ')
                ->groupBy('type_id')
                 ->elementLabel('frequency of the crime')
                // ->values([5,10,20,15,30])
               ->dimensions(1000,500)
               ->responsive(false);


     return view('admin/admin-station-trend',['request'=>$request,'chart'=>$chart,'type'=>$type,'admin'=>$ward]);


   }
      }
