<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PageAboutController extends Controller {

    public function kontak(){
        $namaNama = ['waviq','rudy','eko','bagus'];
        return view('page.about', compact('namaNama'));
    }

	public function index(){
        $nama = 'Waviq Subhi';
        return view('page.about')->with('jeneng',$nama);



        /*atau*/

        /*
             return view('page.about')->with([
               'namaDepan'=> 'Waviq',
                'namaBelakang'=>'Subhi'
            ]);
        */
        /*
            $data = [];
            $data['namaDepan'] = 'Waviq';
            $data['namaBelakang'] = 'Subhi';

            return view('page.about', $data);
        */

        /*
            $namaDepan = 'Waviq';
            $namaBelakang = 'Subhi';

            return view('page.about',compact('namaDepan','namaBelakang'));
        */
    }

}
