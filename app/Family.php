<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Family extends Model
{
    protected $table = "family_types";

    public function products(){
        return $this->hasMany('App\Product');
    }

}
