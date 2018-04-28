<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;
use App\Mail\verifyEmail;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fName' => 'required|string|max:255',
            'lName' => 'required|string|max:255',
            'email' => 'string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'gender' => 'required|string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
      Session::flash('status','Registered! but verify your email to activate your acccount');

      if($data['gender'])
    {
      $avatar = 'public/defaults/avatars/male.png';
    }
    else
    {
      $avatar = 'public/defaults/avatars/female.png';
    }
        $user = User::create([
            'fName' => $data['fName'],
            'lName' => $data['lName'],
            // 'phonenumber' => $data['phonenumber'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'verifyToken' => Str::random(40),
            'status' => 0,
            'gender' => $data['gender'],
            'avatar' => $avatar,
        ]);
        $thisUser = User::findOrFail($user->id);
        $this->sendEmail($thisUser);
        return $user;
    }

    //send email
    public function sendEmail($thisUser)
    {
       Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));

    }
    //verify email function
    public function verifyEmailFirst()
    {
       return view('email.verifyEmailFirst');

    }
    //verify email function
    public function sendEmailDone($email,$verifyToken)
    {
        Session::flash('status','Account verified...you may login in');
       $user = User::where(['email'=>$email,'verifyToken'=>$verifyToken])->first();
       if($user){
          User::where(['email'=>$email,'verifyToken'=>$verifyToken])->update(['status'=>'1','verifyToken'=>NULL ]);
            return redirect(route('login'));

       }else{
         return 'User not found';
       }
    }
}
