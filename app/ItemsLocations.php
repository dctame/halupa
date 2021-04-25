<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemsLocations extends Model
{
    public function locations(){
        return  $this->belongsTo(Location::class, 'id' , 'location_id' );
    }
    public function items(){
        return  $this->belongsTo(Item::class, 'id' , 'items_id');
    }


}
