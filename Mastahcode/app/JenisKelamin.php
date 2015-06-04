<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisKelamin extends Model {

	protected $table = 'jeniskelamin';
    protected $fillable = ['jenisKelamin'];

    public function user(){
        return $this->belongsTo('App\User');
    }

}
