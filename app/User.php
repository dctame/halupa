<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function inventory()
    {
        return $this->hasMany(Inventory::class, 'user_id');
    }

    public function userItems()
    {
        return $this->hasManyThrough(
            Item::class,
            Inventory::class,
            'user_id',
            'id' ,
            'id',
            'items_id'
        );
    }

    public function getInventory()
    {
        $var = $this->userItems()->get();
        $var = $var->toArray();
        if(count($var) < 10){
            for($i = 10 - count($var); $i > 0; $i--){
                $var[] = [
                    'name' =>  'Пусто',
                    'description' =>  'тут пусто',
                    'type' =>  'none',
                    'img' =>  asset('storage/img/inventory/inventorysquare.png'),
                ];
            }

        }
        return $var;
    }



}
