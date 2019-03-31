<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id',
        'contact',
        'model',
        'description',
        'service_id',
        'vin',
        'summ',
        'start',
        'fin'
    ];
    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
