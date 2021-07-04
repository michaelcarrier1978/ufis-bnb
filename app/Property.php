<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'property';
    protected $primaryKey = 'id';

    public function review()
    {
        return $this->hasMany('App\Review', 'property_id');
    }

    public function type()
    {
        return $this->belongTo('App\Type');
    }
}
