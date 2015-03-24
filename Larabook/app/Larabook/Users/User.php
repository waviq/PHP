<?php

namespace Larabook\Users;

use Eloquent;
use Hash;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;
use Larabook\Registration\Events\UserRegistered;
use Laracasts\Commander\Events\EventGenerator;
use Laracasts\Presenter\PresentableTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait,
        RemindableTrait,
        EventGenerator, 
        PresentableTrait;
    /*
     * field yang titugaskan melakukan aksi sesuatu,
     */

    protected $fillable = ['username', 'email', 'password'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    
    /**
     * Path untuk nampilin avatar dari User
     * @var type 
     */
    protected $presenter = 'Larabook\Users\UserPresenter';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    /**
     * Password mesti selalu menggunakan Hashed enskripsi
     * @param type $password
     */
    public function setPasswordAttribute($password) {
        $this->attributes['password'] = Hash::make($password);
    }

    /*     * fungsi melakukan event register
     * Register a new user
     * @param type $username
     * @param type $email
     * @param type $password
     * @return static
     */

    public static function register($username, $email, $password) {
        $user = new static(compact('username', 'email', 'password'));

        $user->raise(new UserRegistered($user));
        return $user;
    }
    
    
    /**
     * Fungsi untuk menunjukan User bisa punya banyak status
     * @return type
     */
    public function statuses(){
        return $this->hasMany('Larabook\Statuses\Status');
    }
    
    public function gravatarLink(){
        
        $email = md5($this->email);
        return "//www.gravatar.com/avatar/{$email}?s=30";
    }

}
