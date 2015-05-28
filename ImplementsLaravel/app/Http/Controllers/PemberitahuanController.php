<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\PreparePemberitahuanRequest;
use App\Pemberitahuan;
use App\Provider;
use Auth;
use Illuminate\Auth\Guard;
use Illuminate\Http\Request;
use Mail;

class PemberitahuanController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
        parent::__construct();
    }

    public function index()
    {
        $pemberitahuan = $this->user->pemberitahuans()->latest()->where('content_removed', 0)->get();
        return view('Pemberitahuan.index', compact('pemberitahuan'));
        /*return Auth::user()->pemberitahuans;*/
    }

    public function create()
    {

        //Get list profiders
        $providers = Provider::lists('name', 'id');

        //Load ke view
        return view('Pemberitahuan.create', compact('providers'));
    }

    public function confirm(PreparePemberitahuanRequest $request)
    {

        $template = $this->compileDmcaTemplate($data = $request->all());

        session()->flash('dmca', $data);

        return view('Pemberitahuan.confirm', compact('template'));

    }

    /**
     * Simpan form DMCA ke tabel Pemberitahuan di DB
     */
    public function store(Request $request)
    {
        $notice = $this->createPemberitahuanKeDb($request);

        //Kirim ke email
        Mail::queue(['text'=>'emails.dmca'], compact('notice'), function ($message) use ($notice)
        {
            $message->from($notice->getOwnerEmail())
                ->to($notice->getPenerimaEmail())
                ->subject('Pemberitahuan DMCA');
        });

        flash('Laporan anda berhasil di kirim');

        return redirect('pemberitahuan');

    }

    public function update($pemberitahuanId, Request $request)
    {
        $isRemoved =  $request->has('content_removed');
        Pemberitahuan::findOrFail($pemberitahuanId)->update(['content_removed'=>$isRemoved]);

        /*return redirect()->back();*/
    }

    public function compileDmcaTemplate($data)
    {

        $data = $data + [
                'name'  => $this->user->name,
                'email' => $this->user->email,
            ];

        return view()->file(app_path('Http/Templates/dmca.blade.php'), $data);
    }

    /**
     * @param Request $request
     */
    private function createPemberitahuanKeDb(Request $request)
    {
        $pemberitahuan = session()->get('dmca') + ['template' => $request->input('template')];
        $pemberitahuan = $this->user->pemberitahuans()->create($pemberitahuan);

        return $pemberitahuan;


        /*
         * Sama dengan code di atas fungsinya
        //dmca = berasal dari fungsi create pada flash confirm d atas
        $data = session()->get('dmca');

        $pemberitahuan = Pemberitahuan::open($data);
        $pemberitahuan->useTemplate($request->input('template'));

        Auth::user()->pemberitahuans()->save($pemberitahuan);
        */
    }

}
