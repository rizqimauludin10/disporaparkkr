<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model{

    protected $table      = 'news';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'user_name',
        'news_slug',
        'news_title',
        'news_desc',
        'news_image',
        'news_bidang',
        'news_tanggal',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}