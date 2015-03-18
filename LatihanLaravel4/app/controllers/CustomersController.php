<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomersController
 *
 * @author waviq
 */
class CustomersController extends BaseController {

    

    public function index() {
        $name = Customers::all();
        return View::make('customers.index', ['nama' => $name]);
    }

    public function create() {
        return View::make('customers/newMember');
    }
    

    public function store() {

        $validasi = Validator::make(Input::all(), Customers::$rules);

        if ($validasi->fails()) {
            return Redirect::back()->withInput()->withErrors($validasi->messages());
        }

        $customers = new Customers();
        $customers->nama = Input::get('nama');
        $customers->alamat = Input::get('alamat');
        $customers->save();

        return Redirect::route('customers.index');
    }

}
