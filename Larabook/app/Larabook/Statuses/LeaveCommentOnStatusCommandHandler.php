<?php namespace Larabook\Statuses;

use Laracasts\Commander\CommandHandler;

class LeaveCommentOnStatusCommandHandler implements CommandHandler {

    private $statusRepo;
    
    function __construct(StatusRepository $statusRepo) {
        $this->statusRepo = $statusRepo;
    }

    
    public function handle($command)
    {
        $comment = $this->statusRepo->leaveComment(
                $command->user_id, 
                $command->status_id, 
                $command->body);
        
        return $comment;
    }

}