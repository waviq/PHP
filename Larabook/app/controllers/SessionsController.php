<?php

use Larabook\Forms\SignInForm;
use Laracasts\Flash\Flash;

class SessionsController extends BaseController {

    /**
     * @var SignInForm
     */
    private $signInForm;

    function __construct(SignInForm $signInForm) {
        
        $this->beforeFilter('guest',['except'=>'destroy']);
        
        $this->signInForm = $signInForm;
    }

    /**
         * Nampilin form buat Sign In/login
         * @return Response
         */
	public function create()
	{
            return View::make('sessions.create');
	}


	/**
	 * Fetch/Mengambil form input
         * validate/validasi form
         * if invalid/jika tidak valid, maka kembali = taruh exeption d global.php
         * jika valid, maka coba untuk login/try sign
         * refirect to statuses/kembali ke status
	 *
	 * @return Response
	 */
	public function store()
	{
            //ngambil form input
            $formData = Input::only('email', 'password');
            
            //validasi
            $this->signInForm->validate($formData);
            
            //jika tida valid, maka muncul alert, sukses = message sukses
            if( ! Auth::attempt($formData)){
                //redirect to statuses
                Flash::message('Gagagl Login ! Please check email n password anda...!');
                return Redirect::back()->withInput();
            }else{
                Flash::message('selamat datang');
                return Redirect::intended('statuses');
            }
	}

        /**
         * Fungsi Untuk Logout
         * @return type
         */
        public function destroy(){
            Flash::message('Kamu sekarang sudah Logout, terimakasih.');
            Auth::logout();
            return Redirect::home();
        }
	

}
