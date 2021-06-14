<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model{

    protected $table      = 'category';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'category_name',
        'category_desc',
        'category_status',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}