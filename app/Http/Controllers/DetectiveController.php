<?php

namespace App\Http\Controllers;

use  Auth;
use App\Court_case;
use App\Admin;
use App\User;
use App\Statement;
use App\Contacts;
use App\Report_crime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminLoginController;
use Illuminate\Support\Facades\Input;
use Session;
use Charts;

class DetectiveController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }
//load the detective dashboard
    public function index()
    {
     $id = Auth::id();
      $request = DB::table('statements')->where('status',0)
      ->where('admin_id', $id)
      ->get();
      return view('admin.detective_dashboard',array('request' => $request ));
    }
//fetch the selected statement
    public function get_index($id)
    {
      $me = Auth::id();
     $request =Report_crime::all();
     $detective = DB::table('contacts')->where('admin_id',$me)
     ->get();
     $statement = DB::table('statements')->where('id',$id)
     ->get();

    return view('admin.detective_view_requests',['request' => $request, 'detective' => $detective ,'statement' => $statement ]);

    }

  //creates case function
    public function create()
    {

           $id = Auth::id();
           $crime_id=Input::get('crime_id');
           $statement_id=Input::get('statement_id');

           //creates an instance of a case and returns it for use in updating pivot table
     $recent_entry =Court_case::create(array(

          'admin_id'=>$id ,
          'statement_id'=>$statement_id,
          'report_crimes_id'=>$crime_id,
          'statement'=>Input::get('statement')

      ));

      // on create case updates the statement to read
                $statement = Statement::find($statement_id);
                if($statement){
                  $statement->status =1;
                  $statement->save();

// on create updates the report crime to received
                  $crime = Report_crime::find($crime_id);
                   if($crime){
                     $crime->status =2;
                     $crime->save();

    //double checks if the case instance exists
               $case_id= $recent_entry->id;
               $present= Court_case::findOrFail($case_id);

              //updates the case_contacts tables

                       if($present){

                            $present->contacts()->attach(['contact_id'=>Input::get('contact_id')]);

                           }
    //if succesfull the redirects to homepage
                     return redirect()->route('admin.dashboard')->with('message','Statement recorded  succesfully');

               }

                  }
// if operation unsuccessfull then redirect back
              return redirect()->back()->with('message','Statement not recorded please try again');

    }

// adds new station
    public function create_station()
    {
            $id = Auth::id();
           $crime_id=Input::get('crime_id');
      Admin::create(array(
          'crime_id'=>$crime_id,
          'admin_id'=>Input::get('admin_id'),
          'ob_number'=>Input::get('ob_number'),
          'date'=>Input::get('date'),
          'status'=> 0,
          'police_number'=>Input::get('police_number'),
          'statement'=>Input::get('statement')

      ));
       return redirect()->route('admin.dashboard')->with('message','Station created  succesfully');

    }

// adds new detective
    public function create_detective()
    {
            $id = Auth::id();
           $crime_id=Input::get('crime_id');
      Admin::create(array(
          'crime_id'=>$crime_id,
          'admin_id'=>Input::get('admin_id'),
          'ob_number'=>Input::get('ob_number'),
          'date'=>Input::get('date'),
          'status'=> 0,
          'police_number'=>Input::get('police_number'),
          'statement'=>Input::get('statement')

      ));
       return redirect()->route('admin.dashboard')->with('message','Detective added  succesfully');

    }

//add new type
    public function create_type()
    {
            $id = Auth::id();
           $crime_id=Input::get('crime_id');
      Admin::create(array(
          'crime_id'=>$crime_id,
          'admin_id'=>Input::get('admin_id'),
          'ob_number'=>Input::get('ob_number'),
          'date'=>Input::get('date'),
          'status'=> 0,
          'police_number'=>Input::get('police_number'),
          'statement'=>Input::get('statement')

      ));
       return redirect()->route('admin.dashboard')->with('message','crime type added succesfully');

    }
}
