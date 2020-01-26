<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * la table associe au model
     * @var string
     */
    protected $table = 'categories';

    public function products(){
        return $this->hasMany('App\Product');
    }
}
