<?php

namespace App\Controllers;

use App\Models\Produk;

class Home extends BaseController
{

    protected $modelProduk;

    public function __construct()

    {
        $this->modelProduk = new Produk();
        $this->session = session();
    }


    public function index()
    {

        $produk = $this->modelProduk->findAll();

        $data = [

            'title' => "Toko Bangunan",
            'data_produk' => $produk
        ];

        return view('Home', $data);
    }

    public function save()
    {
        // dd($this->request->getVar());

        $this->modelProduk->save([
            'id' => rand("202101", 100),
            'nama_produk' => $this->request->getVar('nama_produk'),
            'stock' => $this->request->getVar('stock'),
            'harga_produk' => $this->request->getVar('harga_produk')
        ]);

        session()->setFlashdata('alert', "Produk Berhasil Di Tambahkan");

        return redirect()->to('/');
    }

    public function edit($id)
    {
        // dd($this->request->getVar());

        $this->modelProduk->update($id, [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'stock' => $this->request->getVar('stock'),
            'harga_produk' => $this->request->getVar('harga_produk')
        ]);

        session()->setFlashdata('alert', "Produk Berhasil Di Edit");

        return redirect()->to('/');
    }

    public function delete($id)
    {

        $this->modelProduk->delete($id);

        session()->setFlashdata('alert', "Produk Berhasil Di hapus");
        return redirect()->to('/');
    }
}
