<?php

class GuestController extends BaseController{
    
    public function login(){
        
        $content = View::make('guest.login');
        return $content;
    }
}