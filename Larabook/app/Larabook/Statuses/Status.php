<?php



namespace Larabook\Statuses;

use Eloquent;
use Larabook\Statuses\Events\StatusWasPublished;
use Laracasts\Commander\Events\EventGenerator;


/**
 * Description of Status
 *
 * @author waviq
 */
class Status extends Eloquent{
    
    use EventGenerator;
    /**
     * Isi fields buat status baru
     * Biar ga kena mass assigmen error perlu d bikin fillable
     * @var type 
     */
    protected $fillable = ['body'];
    
    /**
     * Publish a new Status
     * @param type $body
     * @return \static
     */
    public static function publish ($body){
        $status = new static (compact('body'));
        
        $status->raise(new StatusWasPublished($body));
        
        return $status;
    }
    
    /**
     * Fungsi status ini punya ne si User, maka d arahkan
     * @return type
     */
    public function user(){
        return $this->belongsTo('Larabook\Users\User');
    }
    
    
}
