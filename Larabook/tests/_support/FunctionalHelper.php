<?php
namespace Codeception\Module;

use Laracasts\TestDummy\Factory as TestDummy;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FunctionalHelper extends Module
{
    public function haveAnAccount($overrides=[]){
        TestDummy::create('Larabook\Users\User', $overrides);
    }
}
