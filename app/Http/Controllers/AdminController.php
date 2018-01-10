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
      Report_crime::with('user')->where('id',$id)->get();
      $request = Report_crime::with('type')->where('status',0)
      ->where('admin_id', $id)
      ->get();

       return view('admin/admin_dashboard',array('request' => $request ));
      }

         //get requests from client
      public function get_requests()
      {
          $request =Report_crime::all();
          return $request;

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

         return view('admin/admin_view_requests'[array('request' => $request ),array('requests' => $requests )]);

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

}
