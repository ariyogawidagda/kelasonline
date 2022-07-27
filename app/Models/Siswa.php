<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $guarded = ['id']; // Nama Kolom yang tidak boleh di isi
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
