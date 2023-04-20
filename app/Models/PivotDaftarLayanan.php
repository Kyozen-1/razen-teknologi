<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PivotDaftarLayanan extends Model
{
    protected $table = 'pivot_daftar_layanans';
    protected $guarded = 'id';

    public function layanan()
    {
        return $this->belongsTo('App\Models\Layanan', 'layanan_id');
    }
}
