<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['name', 'description'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
