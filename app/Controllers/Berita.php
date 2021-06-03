<?php

namespace App\Controllers;
use App\Models\BeritaModel;
use App\Models\BidangModel;

class Berita extends BaseController
{
	public function index()
	{
		helper('form');
		$bidang = new BidangModel();
		$data = [
			'title' => "Berita",
			'data_bidang' => $bidang->findAll()
		];
		
		return view('admin/berita/index', $data);
	}


    public function getdata(){
        helper('text');
		if($this->request->isAjax()){
			$berita = new BeritaModel();
			$data = [
				'data_berita' => $berita->findAll()
			];

			$msg = [
				'data' => view('admin/berita/berita_data', $data)
			];


			echo json_encode($msg);
		} else {
			exit('Maaf');
		}

    }

	public function formAddData() {
		helper('form');
		if($this->request->isAjax()){
			$bidang = new BidangModel();
			$berita = new BeritaModel();

			$data = [
				'data_bidang' => $bidang->findAll()
			];

				$msg = [
					'data' => view('admin/berita/berita_tambah', $data),
					
				];

				echo json_encode($msg);
		} else {
			exit('Maaf Gagal');
		}
	}

}
