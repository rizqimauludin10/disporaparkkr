<?php

namespace App\Controllers;

class FBeranda extends BaseController
{
	public function index()
	{
		$data['active'] = "current";
        $data['title'] = "Beranda";
		return view('frontend/index', $data);
	}
}
