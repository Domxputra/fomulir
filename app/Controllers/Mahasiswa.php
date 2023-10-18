<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mhs;

    public function __construct() {
        $this->mhs = new MahasiswaModel() ;
    }
    public function index()
    {
        $data['mahasiswa'] = $this->mhs->findAll();
        return view("mahasiswa", $data);
    }
    public function tambah()
    {
        $item = $this->request->getPost();
        if(count($item)>0){
            try {
                $this->mhs->insert($item);
                return redirect()->to(base_url('mahasiswa'));
            } catch (\Throwable $th) {
                //throw $th;
            }

        }else return view('tambah_mahasiswa');
    }
    public function ubah($id)
    {
        $data['item'] = $this->mhs->where("kode", $id)->first();
        return view("ubah_mahasiswa", $data);
    }
    public function hapus($id)
    {
        $this->mhs->delete($id);
        return redirect()->to(base_url("mahasiswa"));
    }
}
