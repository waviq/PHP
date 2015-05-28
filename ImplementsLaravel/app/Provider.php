<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model {

    /*
     D pakai karena di tabel gak pakai timestime
    */
	public $timestamps = false;

    protected $fillable = [
        'name',
        'copyright_email'
    ];

}
