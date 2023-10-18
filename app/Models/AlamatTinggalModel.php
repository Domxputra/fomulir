<?php

namespace App\Models;

use CodeIgniter\Model;

class AlamatTinggalModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'alamat_tinggal';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["kode_pos","jalan", "kelurahan", "rt_rw"];
}
