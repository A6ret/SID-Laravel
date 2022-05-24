<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriAdministrasi extends Model
{
    use HasFactory;

    protected $table = 'kategori_administrasi';

    public $timestamps = false;

    protected $fillable = [
        'name',
    ];
}
