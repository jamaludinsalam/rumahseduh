<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name', 'price','cat_menus_id', 'description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
