<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'id',
        'name',
        'category_id',
        'description',
        'price',
        'worktime',
    ];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function orders()
    {
        return $this->hasMany('App\Orders');
    }
}
