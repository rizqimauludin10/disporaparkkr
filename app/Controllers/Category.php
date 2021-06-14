<?php

namespace App\Controllers;
use App\Models\BeritaModel;
use App\Models\BidangModel;
use App\Models\CategoryModel;

class Category extends BaseController
{
    public function index() 
    {
        helper('form');
        $cat = new CategoryModel();
        $data = [
            'title' => "Kategori",
        ];
        
        return view('admin/category/index', $data);
    }

    public function getdata(){
        helper('text');
        if($this->request->isAjax()){
            $cat = new CategoryModel();
            $data = [
                'data_category' => $cat->findAll()
            ];
    
            $msg = [
                'data' => view('admin/category/category_data', $data)
            ];
    
            echo json_encode($msg);

        } else {
            exit('Maaf');
        }
    
    }
}

