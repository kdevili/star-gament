<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graph_data extends Model
{
    //
    public function graph()
    {
        return $this->belongsTo('App\Graph','data_type_id','id');
    }
}
