<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    //
    public function garment()
    {
        return $this->hasMany('App\Garment','cluster_id','id');
    }
}
