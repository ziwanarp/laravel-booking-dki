<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_layanan';
    public $incrementing = false;

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
