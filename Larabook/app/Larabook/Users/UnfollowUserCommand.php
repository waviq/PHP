<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Larabook\Users;




/**
 * Description of UnfollowUserCommand
 *
 * @author waviq
 */
class UnfollowUserCommand {
    
    
    public $userId;
    public $userIdToUnfollow;
    
    function __construct($userId, $userIdToUnfollow) {
        $this->userId = $userId;
        $this->userIdToUnfollow = $userIdToUnfollow;
    }


}
