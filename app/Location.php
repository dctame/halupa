<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Location extends Model
{

    protected $table = 'locations';

    public $timestamps = false;

    public function pathes()
    {
        return $this->hasMany(Path::class, 'locations_id')->with('relatedLocations');
    }
    public function items()
    {
        return $this->hasManyThrough(
            Item::class,
            ItemsLocations::class,
            'location_id',
            'id' ,
            'id',
            'items_id'
        )->get();
    }

    public function locationItems()
    {
        $inventoryIds = array();
        $usersItems = auth()->user()->userItems()->get();

        foreach ($usersItems as $item){
            $inventoryIds[] = $item->id;
        }

        return  $this->hasManyThrough(
            Item::class,
            ItemsLocations::class,
            'location_id',
            'id' ,
            'id',
            'items_id'
        )
            ->whereNotIn('items_id', $inventoryIds)
            ->get();
    }


    public function getPathesAttribute(){

        $inventoryIds = array();
        $usersItems = auth()->user()->userItems()->get();

        foreach ($usersItems as $item){
            $inventoryIds[] = $item->id;
        }

        $avaiblePathes = [];
        $pathes = $this->pathes()->get();
        foreach ( $pathes as $path) {
            if(in_array($path->relatedLocations->required_item_id, $inventoryIds) || $path->relatedLocations->required_item_id == 0){
                $way = [];
                $way['id'] = $path->getAttribute('path');//todo
                $way['name'] = $this->find($way['id'])->getAttribute('name');
                $avaiblePathes[] = $way;
            }
            continue;
        }
        return $avaiblePathes;
    }

}
