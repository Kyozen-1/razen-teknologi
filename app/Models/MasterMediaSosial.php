<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterMediaSosial extends Model
{
    protected $table = 'master_media_sosials';
    protected $guarded = 'id';

    public function pivot_tim_media_sosial()
    {
        return $this->hasMany('App\Models\PivotTimMediaSosial', 'media_sosial_id');
    }
}
