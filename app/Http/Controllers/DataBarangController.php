<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    public function getData()
    {
        //logika untuk mendapatkan array data
        $databarang = [
            ['id' => 1, 'nama' => 'Beras Pandan Wangi', 'harga' => 15000],
            ['id' => 2, 'nama' => 'tepung terigu', 'harga' => 20000],
            ['id' => 3, 'nama' => 'baygon cair', 'harga' => 13500],
            ['id' => 4, 'nama' => 'penyedap royco', 'harga' => 3200],
            ['id' => 5, 'nama' => 'minyak goreng', 'harga' => 14000],
        ];

        return $databarang;
    }

    public function tampilkan(){
        $data = $this->getData();
        return view('data_barang', compact('data'));
    }
}
