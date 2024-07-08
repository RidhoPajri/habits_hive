<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_produk','stok','price','deskripsi','id_brand'];
    
    public $timestamp = true;

    public function brands(){
        return $this->blongsTo(Brand::class,'id_brand');
    }
}
