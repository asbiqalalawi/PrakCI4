<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProdukModel;

class Produk extends BaseController
{

    public function index()
    {
        // $this->db = db_connect();
        // $query = $this->db->query("SELECT * FROM produk");
        // $row = $query->getRow();
        // dd($row);

        $model = new ProdukModel();
        $data['data'] = $model->getProduk();
        // dd($data);

        echo view('produk/index', $data);
    }
}
