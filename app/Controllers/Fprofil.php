<?php

namespace App\Controllers;

class FProfil extends BaseController
{
	public function index()
	{
        $data['active'] = "current";
        $data['title'] = "Profil Instansi";
		$data['bannerTitle'] = "Profil Intansi" ;
		return view('frontend/templates/profil/index', $data);
	}

	public function visimisi()
	{
        $data['active'] = "current";
        $data['title'] = "Visi & Misi";
		$data['bannerTitle'] = "Visi & Misi" ;
		return view('frontend/templates/profil/visimisi', $data);
	}

	public function tupoksi()
	{
        $data['active'] = "current";
        $data['title'] = "Tupoksi";
		$data['bannerTitle'] = "Tupoksi" ;
		return view('frontend/templates/profil/tupoksi', $data);
	}

	public function struktur()
	{
        $data['active'] = "current";
        $data['title'] = "Struktur Organisasi";
		$data['bannerTitle'] = "Struktur Organisasi" ;
		return view('frontend/templates/profil/struktur', $data);
	}

	public function sambutankadis()
	{
        $data['active'] = "current";
        $data['title'] = "Sambutan KADIS";
		$data['bannerTitle'] = "Sambutan KADIS" ;
		return view('frontend/templates/profil/sambutan-kadis', $data);
	}
}
