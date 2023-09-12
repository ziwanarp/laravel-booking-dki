<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_vendor';
    public $incrementing = false;

    public function cabang()
    {
        return $this->hasMany(Cabang::class);
    }
}
