<?php

use Larabook\Forms\PublishStatusForm;
use Larabook\Statuses\PublishStatusCommand;
use Larabook\Statuses\StatusRepository;
use Laracasts\Flash\Flash;
use Laracasts\Commander\CommanderTrait;


class StatusController extends \BaseController {

    use CommanderTrait;
    
    protected $statusRepository;
    protected $publishStatusForm;

    function __construct(PublishStatusForm $publishStatusForm, StatusRepository $statusRepository) {

        $this->publishStatusForm = $publishStatusForm;
        $this->statusRepository = $statusRepository;
        
         $this->beforeFilter('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $statuses = $this->statusRepository->getFeedForUser(Auth::user());
        return View::make('statuses.index', compact('statuses'));
    }

    /**
     * 
     * Save new Status
     * @return Response
     */
    public function store() {

        //kirim k db, dengan : get body/pesan e, userId yg kirim, dan validasi ne
        $input = array_add(Input::get(), 'userId', Auth::id());
        
        //validasi input an dari user, gk boleh kosong
        $this->publishStatusForm->validate($input);

        //eksekusi perintahnya
        $this->execute(PublishStatusCommand::class, $input);
        
        //muncul pesan notifikasi
        Flash::message('Selamat, sukses melakukan update status');
        
        //direct k halaman semula, form jd kosong lg
        return Redirect::back();
    }

}
