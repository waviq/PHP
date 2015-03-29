<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Larabook\Users;

use Laracasts\Commander\CommandHandler;

/**
 * Description of UnfollowUserCommandHandler
 *
 * @author waviq
 */
class UnfollowUserCommandHandler implements CommandHandler {
    
    protected $userRepo;
    
    function __construct(UserRepository $userRepo) {
        $this->userRepo = $userRepo;
    }

    
    
    
    public function handle($command) {
        
        $user = $this->userRepo->findById($command->userId);
        
        $this->userRepo->unfollow($command->userIdToUnfollow, $user);
    }


}
