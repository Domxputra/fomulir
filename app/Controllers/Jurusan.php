<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JurusanModel;

class Jurusan extends BaseController
{
    protected $jrs;

    public function __construct() {
        $this->jrs = new JurusanModel() ;
    }
    public function index()
    {
        $data['jurusan'] = $this->jrs->findAll();
        return view("jurusan", $data);
    }
    public function tambah()
    {
        $item = $this->request->getPost();
        if(count($item)> 0 ){
            try {
                $this->jrs->insert($item);
                return redirect()->to(base_url('jurusan'));
            } catch (\Throwable $th) {
                //throw $th;
            }

        }else return view('tambah_jurusan');
    }
   
    public function ubah($id=null)
    {
        $item = $this->request->getPost();
        if (isset($item['ubah'])) {
            $item = $this->request->getPost();
            if (count($item) > 0) {
                try {
                    $value = [
                        "jurusan"=>$item['jurusan'],
                    ];
                    $this->jrs->update($id,$value);
                    return redirect()->to(base_url('jurusan'));
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        }else{
            $item['item'] = $this->jrs->where('kode', $id)->first();
            return view('ubah_jurusan', $item);
        } 
    } 
    public function hapus($id)
    {
        $this->jrs->delete($id);
        return redirect()->to(base_url("jurusan"));
    }
}