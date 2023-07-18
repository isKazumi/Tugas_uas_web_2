<?php

namespace App\Models;

use App\Models\Dosen;
use App\Models\Matkul;
use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = ['mahasiswa_id', 'dosen_id', 'nilai'];

    public function mahasiswa(): BelongsTo
    {
        return $this->BelongsTo(Mahasiswa::class);
    }

    public function matkul(): BelongsTo
    {
        return $this->BelongsTo(Matkul::class);
    }

    public function dosen(): BelongsTo
    {
        return $this->belongsTo(Dosen::class);
    }
}
