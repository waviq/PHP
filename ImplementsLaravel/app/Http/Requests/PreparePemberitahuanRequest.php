<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PreparePemberitahuanRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'provider_id' => 'required',
            'judul_pelanggaran' => 'required',
            'link_pelanggaran' => 'required|url',
            'link_asli' => 'required|url',
            'deskripsi' => 'required',
		];
	}

}
