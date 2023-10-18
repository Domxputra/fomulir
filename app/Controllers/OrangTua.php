<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrangTuaModel;

class OrangTua extends BaseController
{
    protected $ot;
    public function __construct() {
        $this->ot = new OrangTuaModel();
    }
    public function index()
    {
        $data['orang_tua'] =  $this->ot->findAll();
        return view("orang_tua", $data);
    }
    public function tambah()
    {
        $item = $this->request->getPost();
        if(count($item)>0){
            try {
                $this->ot->insert($item);
                return redirect()->to(base_url('orang_tua'));
            } catch (\Throwable $th) {
                //throw $th;
            }

        }else return view('tambah_orang_tua');
    }
    public function ubah($id)
    {
        $data['item'] = $this->ot->where("id_orang_tua", $id)->first();
        return view("ubah_orang_tua", $data);
    }
    public function hapus($id)
    {
        $this->ot->delete($id);
        return redirect()->to(base_url("orang_tua"));
    }
}
