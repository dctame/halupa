<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    public function locations(){
      return  $this->belongsTo(Location::class);
    }

    public function relatedLocations(){
        return  $this->belongsTo(Location::class, 'path', 'id');
    }
}
