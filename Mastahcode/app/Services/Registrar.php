<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required',
			'email' => 'required|email|unique:users',
			'password' => 'required|confirmed|min:6',
            'alamat' =>'required|min:15|max:100',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'name' => $data['name'],
            'jenisKelamin' =>$data['jenisKelamin'],
            'tanggalLahir' =>$data['tanggalLahir'],
            'alamat' =>$data['alamat'],
            'nomorTelfon'=>$data['nomorTelfon'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}

}
