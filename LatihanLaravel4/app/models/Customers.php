<?php

class Customers extends Eloquent {

    public static $rules = [
        'nama' => 'required',
        'alamat' => 'required'
    ];
    //inisialisasi supaya gak butuh kolom update_at dan create_at
    //karena laravel default e wajib ada itu kolom bwt catet record
    public $timestamps = false;
    //inisialisasi tabel customer
    protected $table = 'customers';
    
    //biar gak keluar error exeption apapun itu
    
    protected $fillable = ['nama','alamat'];

}
