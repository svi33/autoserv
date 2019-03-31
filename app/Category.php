<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id', 'name', 'box',

    ];
    public function service()
    {
        return $this->hasMany('App\Service');
    }

}
