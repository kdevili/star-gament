<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garment extends Model
{
    //
    public function clusters()
    {
        return $this->belongsTo('App\Cluster','cluster_id','id');
    }
}
