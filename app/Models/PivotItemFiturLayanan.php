<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PivotItemFiturLayanan extends Model
{
    protected $table = 'pivot_item_fitur_layanans';
    protected $guarded = 'id';

    public function fitur_layanan()
    {
        return $this->belongsTo('App\Models\FiturLayanan', 'fitur_layanan_id');
    }
}
