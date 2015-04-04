<?php

class BaseController extends Controller {

    /**
     * @param $validation
     * @return coba2
     */
    public function redirrectBackWithErrors($validation)
    {
        return Redirect::back()->withErrors($validation->messages());
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout() {
        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }

        View::share('penggunaSaatIni', Auth::user());
        View::share('login', Auth::user());
        
        
    }

}