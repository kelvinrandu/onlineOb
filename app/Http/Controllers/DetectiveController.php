<?php

namespace App\Http\Controllers;

use  Auth;
use App\Admin;
use App\User;
use App\Statement;
use App\Report_crime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminLoginController;
use Illuminate\Support\Facades\Input;

class DetectiveController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }

    public function index()
    {
     $id = Auth::id();
      $request = DB::table('statements')->where('status',0)
      ->where('admin_id', $id)
      ->get();
      return view('admin.detective_dashboard',array('request' => $request ));
    }

    public function get_index($id)
    {
      $request =Report_crime::all();
      return view('admin.detective_view_requests',array('request' => $request ));
    }

    public function create()
    {
           $id = Auth::id();
           $crime_id=Input::get('crime_id');
      Statement::create(array(
          'user_id'=>Input::get('user_id'),
          'admin_id'=>$id ,
          'ob_number'=>Input::get('ob_number'),
          // 'date'=>Input::get('date'),
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
