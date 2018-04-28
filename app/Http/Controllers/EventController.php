<?php

namespace App\Http\Controllers;

use  Auth;
use App\Court_case;
use App\Notifications\AssignedDetective;
use App\Notifications\DetectiveAssigned;
use App\Case_contact;
use App\Admin;
use App\Event;
use App\Type;
use App\Statement;
use App\Contact;
use App\Report_crime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminLoginController;
use Illuminate\Support\Facades\Input;
use Session;


class EventController extends Controller
{


//load the event
    public function index()
    {
          return view('client/make_request2');
    }
    public function create()
    {
      Event::create(array(
          'event'=>Input::get('event'),
          'days'=>Input::get('days'),
          'status'=>Input::get('status')

      ));
    }
}
