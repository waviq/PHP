<?php

use Cartalyst\Sentry\Users\WrongPasswordException;

class HomeController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    /**
     * Layout yang akan digunakan untuk controller ini
     * @return type
     */
    
    //protected $layout = 'layouts.master';

    protected $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index(){
        $userss = $this->user->all();
        return View::make('layouts.master',['users' => $userss]);
    }
    public function dashboard(){
        
        return View::make('dashboard.index')->withJudul('Dashboard');
        
    }
    
    public function authenticate(){
        
        $credidentials = array(
            'email' => Input::get('email'),
            'password' => Input::get('password'),
        );
        
        //autentifikasi user
        try{
            $user = Sentry::authenticate($credidentials, false);
            return Redirect::intended('dashboard');
        } catch (WrongPasswordException $e) {
            return Redirect::back()->with('errorMessage','Password yang anda masukan salah');
        }catch(Exception $e){
            return Redirect::back()->with('errorMessage',trans('akun dengan email tersebut tidak di temukan di sistem kami'));

        }
    }
    
    public function logout(){
        Sentry::logout();
        return Redirect::to('login')->with('successMessage','Anda berhasil Logout');
    }

}
