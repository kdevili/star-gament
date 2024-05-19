<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graph extends Model
{
    public function graph_data()
    {
        return $this->belongsTo('App\Graph_data','id','data_type_id');
    }

}
