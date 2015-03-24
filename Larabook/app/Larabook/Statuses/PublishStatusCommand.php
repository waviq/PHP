<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Larabook\Statuses;

/**
 * Description of PublishStatusCommand
 *
 * @author waviq
 */
class PublishStatusCommand {

    public $body;
    public $userId;

    function __construct($body, $userId) {
        $this->body = $body;
        $this->userId = $userId;
    }

}
