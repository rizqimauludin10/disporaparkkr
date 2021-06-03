<?php

namespace App\Models;

use CodeIgniter\Model;

class BidangModel extends Model{

    protected $table      = 'bidang';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'bidang_name',
        'bidang_desc'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}