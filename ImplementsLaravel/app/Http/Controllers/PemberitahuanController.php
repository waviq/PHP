<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PemberitahuanController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }
	public function index(){
        return 'Semua Pemberitahuan';
    }

    public function create(){

        //Get list profiders

        //Load ke view
        return view('Pemberitahuan.create');
    }

}
