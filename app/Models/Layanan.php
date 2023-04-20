<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'layanans';
    protected $guarded = 'id';

    public function pivot_daftar_layanan()
    {
        return $this->hasMany('App\Models\PivotDaftarLayanan', 'layanan_id');
    }

    public function fitur_layanan()
    {
        return $this->hasMany('App\Models\FiturLayanan', 'layanan_id');
    }
}
