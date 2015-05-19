<?php

namespace app\Container;


class Customer {

    private $dompet;

    function __construct(Dompet $dompet)
    {
        $this->dompet = $dompet;
    }

    public function cekDompet(){
        return $this->dompet->cekIsi();
    }

}