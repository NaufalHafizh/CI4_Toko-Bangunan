<?php

namespace App\Models;

use CodeIgniter\Model;

class Produk extends Model
{
    protected $table = "produk";
    protected $allowedFields = ['id', 'nama_produk', 'stock', 'harga_produk'];
    protected $useAutoIncrement = false;
}
