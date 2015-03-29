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
    
    //fungsi ini akan menampilkan avatar yg tampil d per halaman
    public function getPaginated($howMany = 20){
        return User::orderBy('username','asc')->paginate($howMany);
    }
    
    /**
     * Urutin dari comment paling ter baru - ter lama secara urut berdasarkan waktu ne
     * Nyumpulin User by username 
     * @param type $username
     * @return type
     */
    public function findByUsername($username){
        
        return User::with(['statuses' =>  function($query){
            
            $query->latest();
            
        }])->whereUsername($username)->first();
    }

    /**
    public function findByUsername($username){

    return User::where($username)->first();
    }
     *
     */

    /**
     * Nyari User by Id
     * @param $id
     * @return \Illuminate\Support\Collection|static
     */
    public function findById($id){
        return User::findOrFail($id);
    }

    /**
     * Follow a Larabook User
     *
     * @param $userIdToFollow
     * @param User $user
     * @return mixed
     */
    public function follow($userIdToFollow, User $user)
    {
        return $user->followedUsers()->attach($userIdToFollow);
    }
    
    /**
     * Fungsi Untuk Unfollow user
     * 
     * @param type $userIdToUnfollow
     * @param \Larabook\Users\User $user
     * @return type
     */
    public function unfollow($userIdToUnfollow, User $user)
    {
        return $user->followedUsers()->detach($userIdToUnfollow);
    }

}
