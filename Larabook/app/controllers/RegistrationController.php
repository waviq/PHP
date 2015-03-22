<?php

use Larabook\Forms\RegistrationForm;
use Larabook\Registration\RegisterUserCommand;
use Larabook\Core\CommandBus;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegistrationController
 *
 * @author waviq
 */
class RegistrationController extends BaseController {
    
    use CommandBus;
    
    

    /**
     * @var RegistrationForm
     */
    private $registrationForm;

    
    /**
     * 
     * @param RegistrationForm $registrationForm
     */
    function __construct(RegistrationForm $registrationForm) {

        $this->registrationForm = $registrationForm;
    }

    /*
     * Nampilin registrasi user
     * @return Response
     */

    public function create() {
        return View::make('registration.create');
    }

    /*
     * Nampilin jika register berhasil
     * @return string
     */

    public function store() {

        $this->registrationForm->validate(Input::all());

        extract(Input::only('username', 'email', 'password'));



        $user = $this->execute(
                new RegisterUserCommand($username, $email, $password)
        );
        
        Auth::login($user);

        return Redirect::home();

        /*
          $this->registrationForm->validate(Input::all());
          $user = User::create(
          Input::only('username', 'email', 'password')
          );
          Auth::login($user);
          return Redirect::home();
         * 
         */
    }

}
