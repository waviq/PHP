<?php

namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegistrationForm
 *
 * @author waviq
 */


/*
 * Validasi rules atau
 * aturan untuk validasi Form Registrasi
 */
class RegistrationForm extends FormValidator {

    protected $rules = [
        'username' => 'required|unique:users',
        'email'=>'required|email|unique:users',
        'password'=>'required|confirmed'
    ];

}
