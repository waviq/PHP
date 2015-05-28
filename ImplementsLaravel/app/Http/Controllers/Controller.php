<?php namespace App\Http\Controllers;

use Auth;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

    /*
     * Untuk authentifikasi user
     * variabel App\User|null
     */
    protected $user;

    /*
     * ketika user sudah login
     * variabel App\User|null
     */
    protected $telahLogin;

    /**
     * Create a new injeksi Controller instance untuk di pakai di Controller lainya
     */
    public function __construct()
    {
        $this->user = $this->telahLogin = Auth::user();
    }


}
