<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangTuaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'orang_tua';
    protected $primaryKey       = 'id_orang_tua';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["nik_ayah", "nik_ibu", "nama_ayah", "nama_ibu", "alamat"];
}
