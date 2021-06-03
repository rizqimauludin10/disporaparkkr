<?php

namespace App\Controllers;

class FLayanan extends BaseController
{
	public function index()
	{
        $data['active'] = "current";
        $data['title'] = "Maklumat Pelayanan";
		$data['bannerTitle'] = "Maklumat Pelayanan" ;
		return view('frontend/templates/layanan/maklumat-pelayanan', $data);
	}

	
}
