<?php namespace Larabook\Users;

use Eloquent, Hash;

use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait,
        RemindableTrait;
    /*
     * field yang titugaskan melakukan aksi sesuatu,
     */
    protected $fillable=['username','email','password'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

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
    public function setPasswordAttribute($password){
        $this->attributes['password']= Hash::make($password);
    }

        /**fungsi melakukan event register
     * Register a new user
     * @param type $username
     * @param type $email
     * @param type $password
     * @return static
     */
    public static function register($username, $email, $password){
        $user = new static (compact('username','email','password'));
        return $user;
        
        
    }

}
