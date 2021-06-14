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

	public function standarpelayanan()
	{
        $data['active'] = "current";
        $data['title'] = "Standar Pelayanan";
		$data['bannerTitle'] = "Standar Pelayanan" ;
		return view('frontend/templates/layanan/standar-pelayanan', $data);
	}

	public function mottopelayanan()
	{
        $data['active'] = "current";
        $data['title'] = "Motto Pelayanan";
		$data['bannerTitle'] = "Motto Pelayanan" ;
		return view('frontend/templates/layanan/motto-pelayanan', $data);
	}

	public function tdup()
	{
        $data['active'] = "current";
        $data['title'] = "TDUP";
		$data['bannerTitle'] = "TDUP" ;
		return view('frontend/templates/layanan/tdup', $data);
	}

	public function lapor()
	{
        $data['active'] = "current";
        $data['title'] = "E-Lapor";
		$data['bannerTitle'] = "E-Lapor" ;
		return view('frontend/templates/layanan/e-lapor', $data);
	}
}
