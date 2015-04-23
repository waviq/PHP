<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model {

    protected $table = 'artikel';
	protected $fillable = [
        'title',
        'body',
        'penulis',
        'published_at',
        'user_id'
    ];

    public function setPublishedAtAttribute($data){
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $data);
    }

    /**
     * Menandakan bahwa model class artikel berhubungan dengan model class User
     */
    public function User(){
        return $this->belongsTo('App\User');
    }


}
