<?php



namespace Larabook\Statuses;

use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;


class PublishStatusCommandHandler implements CommandHandler{
    
    //d kirim ke clas dipatchable
    use DispatchableTrait;
    /**
     *  Injeksi ke StatusRepository
     * @var type StatusRepository
     */
    protected $statusRepository;
   
    function __construct(StatusRepository $statusRepository) {
        $this->statusRepository = $statusRepository;
    }

        /**
     * Handle the command
     * @param type $command
     */
    public function handle($command) {
        
        $status = Status::publish($command->body);

        $status = $this->statusRepository->save($status, $command->userId);

        $this->dispatchEventsFor($status);

        return $status;
    }


}
