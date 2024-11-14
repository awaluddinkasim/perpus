<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Buku extends Model
{
    protected $table = 'buku';

    protected $fillable = [
        'isbn',
        'judul',
        'penulis',
        'kategori_id',
        'penerbit_id',
        'tahun_terbit',
        'jumlah_halaman'
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    public function penerbit(): BelongsTo
    {
        return $this->belongsTo(Penerbit::class);
    }
}
