<?php

use \Laracasts\Commander\CommanderTrait;
use Larabook\Statuses\LeaveCommentOnStatusCommand;



class CommentsController extends \BaseController {
    
    use CommanderTrait;
    
    /**
     * fungsi untuk posting comment dalam status
     * 
     * Mengambil input
     * eksekusi comment ke dalam status
     * kembali
     */
    public function store(){
        
        $input = array_add(Input::get(), 'user_id', Auth::id());
        
        $this->execute(LeaveCommentOnStatusCommand::class, $input);
        
        return Redirect::back();
    }
    
    
}
