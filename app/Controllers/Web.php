<?php

namespace App\Controllers;

class Web extends BaseController
{
	public function index()
	{
		$data = array(
			'title' => 'DryLah',
			'isi' 	=> 'web'
		);
		return view('web', $data);
	}

	//--------------------------------------------------------------------

}
