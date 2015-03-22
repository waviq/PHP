<?php

namespace Larabook\Core;

use App;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommandBus
 *
 * @author waviq
 */
trait CommandBus {
    
    /**
     * Eksekusi Command
     * @param type $command
     * @return type
     */
    public function execute($command){
        return $this->getCommandBus()->execute($command);
    }
    
    /**
     * Mengambil command
     * @return type
     */
    public function getCommandBus(){
        return App::make('Laracasts\Commander\CommandBus');
    }
}
