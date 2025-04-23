<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'harga',
        'deskripsi',
        'image',
    ];

    public $timestamps = true;

    public function deleteImage()
    {
        if ($this->image && file_exists(public_path('images/produk/' . $this->image))) {
            unlink(public_path('images/produk/' . $this->image));
        }
    }
}
