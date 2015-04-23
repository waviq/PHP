<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class KontakController extends Controller {

    public function index(){
        $namaNama = ['waviq','rudy','eko','bagus'];
        return view('page.kontak', compact('namaNama'));
    }

}
