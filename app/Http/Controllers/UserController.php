<?php

namespace App\Http\Controllers;
use  Auth;
use App\Report_crime;
use App\Type;
use App\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;
use Charts;




class UserController extends Controller
{
  public function index()
  {
      return view('client/client_dashboard');
  }
  public function success()
  {
      return view('client/client_sent_request');
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
    //validate the id number against the name
    $this->validate($request,[
      'name' => 'bail|max:50|string|unique:startups|required',
    ]);
    Report_crime::create(array(
        'user_id'=>Auth::user()->id,
        'admin_id'=>Input::get('country'),
        'phonenumber'=>Input::get('city'),
        'idNo'=>Input::get('phone'),
        'date'=>Input::get('gender'),
        'type_id'=>Input::get('fullname'),
        'status'=>0,
        'crime_description'=>Input::get('remarks')

    ));
  // dd(Input::all() );


      return redirect()->route('home.dashboard')->with('message','Request posted succesfull');
  }

}
