<?php

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
class RegistrationController extends BaseController{
   /*
    * Nampilin registrasi user
    * @return Response
    */
    public function create(){
        return View::make('registration.create');
    }
    
    /*
    * Nampilin jika register berhasil
    * @return string
    */
    public function store(){
        return Redirect::home();
    }
}
