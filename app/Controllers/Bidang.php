<?php

namespace App\Controllers;
use App\Models\BidangModel;

class Bidang extends BaseController
{
    public function index()
	{
		$data['title'] = 'Bidang';
		
		return view('admin/berita/index', $data);
	}
}