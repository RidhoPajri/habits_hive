<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_agen',
        'alamat',
        'image',
    ];

    public $timestamps = true;

    public function deleteImage()
    {
        if ($this->image && file_exists(public_path('images/agen/' . $this->image))) {
            unlink(public_path('images/agen/' . $this->image));
        }
    }
}
