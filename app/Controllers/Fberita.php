<?php

namespace App\Controllers;

class Fberita extends BaseController
{
	public function index()
	{
        $data['active'] = "current";
        $data['title'] = "Berita";
		$data['bannerTitle'] = "Berita" ;
		return view('frontend/templates/berita/index', $data);

	}

	
}
