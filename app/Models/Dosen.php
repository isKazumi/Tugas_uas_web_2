<?php

namespace App\Models;

use App\Models\Nilai;
use App\Models\Matkul;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = ['nidn',  'nama_dosen', 'matkul_id', 'tempat_lahir', 'tgl_lahir', 'alamat'];

    public function matkul(): BelongsTo
    {
        return $this->belongsTo(Matkul::class);
    }

    public function nilai(): HasMany
    {
        return $this->hasMany(Nilai::class);
    }
}
