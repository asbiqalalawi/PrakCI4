<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        //Cretate WIth Query Builder
        $input = $this->db->table('produk')->insert([
            'baju' => 'baju pendek',
            'celana' => 'celana pendek'
        ]);
        $row = $input->getRow();
        dd($input);
    }

    public function create2()
    {
        $data = [
            'baju' => 'baju pendek',
            'celana' => 'celana pendek'
        ];
        //Create With Query Database
        $inputWithQuerty = $this->db->query("INSERT INTO produk (baju, celana) VALUES (:baju:, :celana:)", $data);
        dd($inputWithQuerty);
    }
    //Create With Model di Controller Produk
}
