<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\PreparePemberitahuanRequest;
use App\Provider;
use Illuminate\Auth\Guard;
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
        $providers = Provider::lists('name','id');

        //Load ke view
        return view('Pemberitahuan.create', compact('providers'));
    }

    public function confirm(PreparePemberitahuanRequest $request, Guard $auth){

        $template = $this->compileDmcaTemplate($data = $request->all(), $auth);

        session()->flash('dmca', $data);

        return view('Pemberitahuan.confirm', compact('template'));

    }

    public function store(){
        //dmca = berasal dari fungsi create pada flash confirm d atas
        $data= session()->get('dmca');
        return $data;




    }

    public function compileDmcaTemplate($data, Guard $auth){

        $data = $data + [
                'name' => $auth->user()->name,
                'email' => $auth->user()->email,
            ];
        return view()->file(app_path('Http/Templates/dmca.blade.php'), $data);
    }

}
