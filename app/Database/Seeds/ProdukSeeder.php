<?php

namespace App\Database\Seeds;

class ProdukSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_produk' => 'baju',
                'deskripsi_produk' => 'baju panjang'
            ],
            [
                'nama_produk' => 'celana',
                'deskripsi_produk' => 'celana panjang'
            ],
        ];

        // $this->db->query("INSERT INTO produk (nama_produk, deskripsi_produk) VALUES (:nama_produk:, :deskripsi_produk:)", $data);
        $this->db->table('produk')->insertBatch($data);
        // Simple Queries
        // $this->db->query(
        // "INSERT INTO users (username, email) VALUES(:username:, :email:)",
        // $data
        // );

        // Using Query Builder

    }
}
