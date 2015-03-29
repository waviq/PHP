<?php

use Larabook\Users\FollowUserCommand;
use Larabook\Users\UnfollowUserCommand;
use Laracasts\Commander\CommanderTrait;
use Laracasts\Flash\Flash;

class FollowsController extends BaseController {
    
    use CommanderTrait;

    /**
     * Follow User
     * Need : id user buat follow
     * Need : id autentifikasi user
     * @return Response
     */
    public function store()
    {
        $input = array_add(Input::get(), 'userId', Auth::id());

        $this->execute(FollowUserCommand::class, $input);

        Flash::success('sukses menjadi followers');

        return Redirect::back();
    }

    /**
     * Unfollow a User
     * 
     * @param type $userIdToUnFollow
     */
    public function destroy($userIdToUnFollow) {
        
        $input = array_add(Input::get(), 'userId', Auth::id());
        
        $this->execute(unfollowUserCommand::class, $input);
        
        Flash::success('Sukses berhenti menjadi followers');
        
        return Redirect::back();
    }

}
