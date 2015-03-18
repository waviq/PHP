<?php

class SessionsController extends BaseController{
    
    public function create(){
        if(Auth::check()){
            return Redirect::to('/admin');
        }
        return View::make('sessions.create');
    }
    
    //fungsi untuk auntentifikasi Login
    public function store(){
        
        if(Auth::attempt(Input::only('email','password'))){
            return 'Welcome '.Auth::user()->username;
        }else{
            return Redirect::back()->withInput();
        }
        
    }
    
    public function destroy(){
        Auth::logout();
        
        return Redirect::route('sessions.create');
    }
}