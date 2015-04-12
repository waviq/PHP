<?php

class GuestController extends BaseController{
    
    protected $layout = 'layouts.guest';
    
    public function login()
    {
        // redirect ke dashboard jika user sudah login
        if (Sentry::check()) {
            Session::reflash();
            return Redirect::to('dashboard');
        } 

       return View::make('guest.login');
    }
    
    public function index()
    {
        // Redirect to dashboard if user has logged in
        if (Sentry::check()) {
            return Redirect::to('dashboard');
        }
        $this->layout->content = View::make('guest.index')->withTitle("Daftar Buku");
    }
}