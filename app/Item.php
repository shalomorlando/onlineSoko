<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'additems';
    protected $fillable=['name','image','description','price'];
}
