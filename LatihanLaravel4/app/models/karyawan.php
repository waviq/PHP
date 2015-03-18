<?php

class karyawan extends Eloquent {

    public static $rules = [
        'nama'=>'required',
        'password'=>'required',
        'alamat'=>'required'
    ];
    
    public $errors;
    
    public function isValid(){
        $validasi = Validator::make($this->attributes,  static::$rules);
        
        if($validasi->passes()){
            return true;
        }
        
        $this->errors = $validasi->messages();
        return false;
    }
    
    


    //inisialisasi supaya gak butuh kolom update_at dan create_at
    //karena laravel default e wajib ada itu kolom bwt catet record
    public $timestamps = false;
    //inisialisasi tabel karyawan
    protected $table = 'karyawan';
    //biar gak keluar error exeption apapun itu

    protected $fillable = ['nama', 'password', 'alamat'];
    
    

}
