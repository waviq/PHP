<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Larabook\Users;




/**
 * Description of UserRepository
 *
 * @author waviq
 */


class UserRepository {
    
    /**
     * Persist a user
     * @param User $user
     * @return type
     */
    public function save(User $user){
        return $user->save();
    }
}
