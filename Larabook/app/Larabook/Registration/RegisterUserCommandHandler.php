<?php namespace Larabook\Registration;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Larabook\Users\User;
use Larabook\Users\UserRepository;
use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;


//use Larabook\Users\User;

/**
/**
/**
 * Description of RegisterUserCommandHandler
 *
 * @author waviq
 */
class RegisterUserCommandHandler implements CommandHandler {

    use DispatchableTrait;

    protected $repository;

    /**
     *
     * @param UserRepository $repository
     */
    function __construct(UserRepository $repository) {
        $this->repository = $repository;
    }

    /**
     * karta kelas implements jd perlu d ovveride fungsi ne
     * @param type $command
     * @return type
     */
    public function handle($command) {
        $user = User::register(
                        $command->username, $command->email, $command->password
        );
        $this->repository->save($user);
        
        $this->dispatchEventsFor($user);

        return $user;
    }

}
