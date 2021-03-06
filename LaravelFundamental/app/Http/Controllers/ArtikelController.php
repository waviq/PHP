<?php namespace App\Http\Controllers;

use App\Artikel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ArtikelRequest;
use App\Kategori;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Request;

class ArtikelController extends Controller {


    public function __construct()
    {
        //$this->middleware('auth',['only' => 'store']);
        $this->middleware('auth',['except' => 'index']);

    }

    public function index(){

        $artikel = Artikel::latest('published_at')->get();

        $latest = Artikel::latest()->first();

        return view('artikel.index',compact('artikel','latest'));
    }

    public function show(Artikel $artikel){
        //$artikel = Artikel::findOrFail($id);

        return view('artikel.show', compact('artikel'));
    }

    public function create(){

        $kategori = Kategori::lists('namaKategori','id');
        /*if(Auth::guest()){
            return redirect('artikel');
        }*/
        return view('artikel.create', compact('kategori'));
    }

    public function store(ArtikelRequest $request){

        /*dd($request->input('published_at'));*/
        $artikel = new Artikel($request->all());
        $artikels = Auth::user()->artikel()->save($artikel);//save ke tabel users n artikel

        $artikels->kategori()->attach($request->input('kategori_list'));

        flash()->overlay('Artikel berhasil di simpan','Horeee');
        /*\Session::flash('pesan','Artikel berhasil di simpan');*/

        /*
        $input = Request::all();

        Artikel::create($input);*/

        return Redirect('artikel');
    }

    public function edit(Artikel $artikel){
        //$artikel = Artikel::findOrFail($id);

        $kategori = Kategori::lists('namaKategori','id');

        return view('artikel.edit', compact('artikel','kategori'));
    }

    public function update(Artikel $artikel, ArtikelRequest $request){

        //$artikel = Artikel::findOrFail($id);
        $artikel->update($request->all());
        $artikel->kategori()->sync($request->input('kategori_list'));
        flash()->success('berhasil update artikel');
        return Redirect('artikel');
    }

}
