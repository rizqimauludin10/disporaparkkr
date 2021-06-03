<?php

namespace App\Controllers;

class FContact extends BaseController
{
	public function index()
	{
        $data['active'] = "current";
        $data['title'] = "Contact";
		$data['bannerTitle'] = "Contact" ;
		return view('frontend/templates/contact/index', $data);
	}

	
}
