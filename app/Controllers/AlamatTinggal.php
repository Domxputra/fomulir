<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlamatTinggalModel;

class AlamatTinggal extends BaseController
{
    protected $at;
    public function __construct() {
        $this->at = new AlamatTinggalModel();
    }

    public function index()
    {
        $data['alamat_tinggal'] = $this->at->findAll();
        return view("alamat_tinggal", $data);
    }
    public function tambah()
    {
        $item = $this->request->getPost();
        if(count($item)> 0 ){
            try {
                $this->at->insert($item);
                return redirect()->to(base_url('alamat_tinggal'));
            } catch (\Throwable $th) {
                //throw $th;
            }

        }else return view("tambah_alamat_tinggal");
    }
    public function ubah($id)
    {
        $data['item'] = $this->at->where("id", $id)->first();
        return view("ubah_alamat_tinggal", $data);
    }
    public function hapus($id)
    {
        $this->at->delete($id);
        return redirect()->to(base_url("alamat_tinggal"));
    }
}
