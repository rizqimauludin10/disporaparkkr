<?php

namespace App\Controllers;
use App\Models\BeritaModel;
use App\Models\BidangModel;
use App\Models\CategoryModel;

class Unduhan extends BaseController
{
    public function index() 
    {
        helper('form');
        $cat = new CategoryModel();
        $data = [
            'title' => "Unduhan",
        ];
        
        return view('admin/unduhan/index', $data);
    }
}

