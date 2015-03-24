<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Larabook\Users;

use Laracasts\Presenter\Presenter;


class UserPresenter extends Presenter {
    
    
    /**
     * Nampilin link ke user gravatar
     * @param type $size
     * @return type
     */
    public function gravatar($size=30){
        $email = md5($this->email);
        return "//www.gravatar.com/avatar/{$email}?s={$size}";
    }
}
