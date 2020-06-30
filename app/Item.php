<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'addeditems';
    protected $fillable=['name','image','description', 'quantity', 'price'];
}
