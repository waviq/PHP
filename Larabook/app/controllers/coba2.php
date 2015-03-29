<?php

use Illuminate\Support\Facades\Validator;
use Larabook\Users\User;

class coba2 extends BaseController{

    /**
     * @param \Larabook\Users\User $user
     * @return mixed
     */
    public function nama(User $user){

        return Redirect::back()->withErrors($validation->messages());


    }


}