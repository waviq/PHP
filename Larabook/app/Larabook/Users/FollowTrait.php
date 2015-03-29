<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Larabook\Users;

/**
 * Description of FollowTrait
 *
 * @author waviq
 */
trait FollowTrait {
    
    
    //static::class = class User
    //belongsToMany(TabelUser, tabel follows, fk follower_id, fk followed)
    public function followedUsers(){
        return $this->belongsToMany(static::class, 'follows', 'follower_id', 'followed_id')
                ->withTimestamps();
    }
    
    public function isFollowedBy(User $otherUser){
        
        $idsWhoOtherUserFollows = $otherUser->followedUsers()->Lists('followed_id');
        
        return in_array($this->id, $idsWhoOtherUserFollows);
    }
    
    /**
     * nampilin yg memfollow/followers
     * @return type
     */
    public function followers(){
        
        return $this->belongsToMany(static::class, 'follows', 'followed_id', 'follower_id')
                ->withTimestamps();
    }
}
