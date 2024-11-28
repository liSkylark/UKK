<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nama_Kategori',
    ];

    public function Buku()
    {
        return $this->hasMany(Buku::class);
    }
}
