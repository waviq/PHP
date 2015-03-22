<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Larabook\Registration;

/**
 * Description of RegisterUserCommand
 *
 * @author waviq
 */
class RegisterUserCommand {
    
    public $username;
    public $email;
    public $password;
    
    function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

            
}
