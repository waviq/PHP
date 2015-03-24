<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Larabook\Forms;

use Laracasts\Validation\FormValidator;

/**
 * Description of PublishStatusForm
 *
 * @author waviq
 */

/**
 * Validasi di text area publish status
 */
class PublishStatusForm extends FormValidator {
    
    protected $rules = [
        'body'    => 'required',
    ];
}
