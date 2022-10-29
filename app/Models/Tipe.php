<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    use HasFactory;
    protected $table = 'tipes';
    protected $guarded = [];

    public function beritaObj()
    {
        return $this->hasMany(Berita::class);
    }
}
