<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ['user_id','items_id'];
    public $timestamps = false;


}
