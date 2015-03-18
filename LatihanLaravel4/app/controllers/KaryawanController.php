<?php

class KaryawanController extends BaseController {

    protected $karyawan;
    
    public function __construct(karyawan $karyawan) {
        $this->karyawan = $karyawan;
    }

    
    //index yg akan muncul d halaman utama karyawan
    public function index() {
        $user = $this->karyawan->all(); //select * from karyawan

        return View::make('karyawan.index', ['user' => $user]);
    }
    //show yg akan tampilin detail nama
    public function show($nama) {
        //sama kaya : select * from karyawan where nama = NAMA LIMIT 1
        //$user = karyawan::whereNama($nama)->first();
        $user = $this->karyawan->whereNama($nama)->first();
        return View::make('karyawan.show', ['karyawan' => $user]);
    }

    public function create() {
        return View::make('karyawan.create');
    }

    public function store() {  
        
        $input = Input::all();
        
        
        if(!$this->karyawan->fill($input)->isValid()){
            return Redirect::back()->withInput()->withErrors($this->karyawan->errors);
        }
        //$validasi = Validator::make(Input::all(), karyawan::$rules);
        

        $this->karyawan->save();

        return Redirect::route('karyawan.index');
    }

}
