<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiturLayanan extends Model
{
    protected $table = 'fitur_layanans';
    protected $guarded = 'id';

    public function pivot_item_fitur_layanan()
    {
        return $this->hasMany('App\Models\PivotItemFiturLayanan', 'fitur_layanan_id');
    }

    public function layanan()
    {
        return $this->belongsTo('App\Models\Layanan', 'layanan_id');
    }
}
