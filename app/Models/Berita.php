<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'beritas';
    protected $guarded = [];

    public function kategoriObj()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function tipeObj()
    {
        return $this->belongsTo(Tipe::class);
    }
}
