<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = 'comics';
    protected $fillable=[
        'title',
        'src',
        'description',
        'series',
        'price',
        'sale_date',
        'type',
    ];
}
