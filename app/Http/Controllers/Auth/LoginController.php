<?php

namespace App\Http\Controllers\Auth;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }
    /**
    * Redirect the user to the GitHub authentication page.
    *
    * @return \Illuminate\Http\Response
    */
   public function redirectToProvider()
   {
       return Socialite::driver('facebook')->redirect();
   }

   /**
    * Obtain the user information from GitHub.
    *
    * @return \Illuminate\Http\Response
    */
   public function handleProviderCallback()
   {

    $userSocial = Socialite::driver('facebook')->user();

    /*get the user from the database that matches the linkedin user*/
    // $findUser = User::whereEmail($userSocial->email)->first();
    return  $userSocial->email;

    // if($findUser){
    //   Auth::login($userSocial);
    //   return 'done with old';
    //
    // }else{
    //
    //   $user = new User;
    //   $user->fname =  $userSocial->name;
    //   $user->lname =  $userSocial->name;
    //   $user->email =  $userSocial->email;
    //   $user->avatar =  $userSocial->avatar;
    //   $user->gender =  0 ;
    //   $user->remember_token =  $userSocial->token;
    //   $user->password =  bcrypt(12345678);
    //   $user->save();
    //   Auth::login($userSocial);
    //   return 'done with new';
    //
    // }




   }

}
