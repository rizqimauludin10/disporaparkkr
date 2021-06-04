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

	public function storeData() {
		helper('form');
		if($this->request->isAjax()) {

			$validation =  \Config\Services::validation();

			$valid = $this->validate([
				'name_news' => [
					'label' => 'Judul Berita',
					'rules' => 'required',
					'errors' => [
						'required' => '{field} tidak boleh kosong'
						]
					],
					'editor' => [
						'label' => 'Isi Berita',
						'rules' => 'required',
						'errors' => [
								'required' => '{field} tidak boleh kosong'
						]
					],

					'date_news' => [
						'label' => 'Tanggal Berita',
						'rules' => 'required',
						'errors' => [
								'required' => '{field} tidak boleh kosong'
						]
					],

                    'image_news' => [
						'label' => 'Upload Gambar',
						'rules' => 'uploaded[image_news]|mime_in[image_news,image/png,image/jpg,image/jpeg]|is_image[image_news]',
						'errors' => [
							'uploaded' => '{field} wajib diisi',
							'mime_in' => 'Harus dalam bentuk gambar'
						]
                    ]
			]);

			if(!$valid) {
				$msg = [
					'error' => [
						'namenews' => $validation->getError('name_news'),
						'editor' => $validation->getError('editor'),
						'datenews' => $validation->getError('date_news'),
						'image_news' => $validation->getError('image_news')
						]
					];

					} else {
						$image = $this->request->getFile('image_news');
                        $img = $this->request->getVar('name_news');
                        $image->move('assets/news-image', $img . '.' . $image->getExtension());

						$saveData = [
							'user_name' => user()->username,
							'news_title' => $this->request->getVar('name_news'),
							'news_desc' => $this->request->getVar('editor'),
							'news_tanggal' => $this->request->getVar('date_news'),
							'news_bidang' => $this->request->getVar('bidang_news'),
							'news_image' => './assets/news-image/' . $image->getName()
							
						];

						$news = new BeritaModel;

						$news->insert($saveData);

						$msg = [
							'sukses' => 'Data news berhasil tersimpan'
						];
					}

					echo json_encode($msg);
			} else {
				exit("Gagal input data");
			}
		}
}
