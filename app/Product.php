<?php

namespace App;

use App\Category;
use App\Family;
use App\Http\Entity\PropertySearch;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function family()
    {
        return $this->belongsTo('App\Family');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function scopeGetProducts($query, PropertySearch $search)
    {
        // price
        if ($price = $search->getMaxPrice()) {
            $query->where('price', '<', $price);
        }
        // each size

        $query->where(function ($query) use ($search) {
            if ($sizes = $search->getSizes()) {
                for ($i = 0; $i < count($sizes); $i++) {
                    if ($i < 1) {
                        $query->where('size', $sizes[$i]);
                    } else {
                        $query->orWhere('size', $sizes[$i]);
                    }
                }
            }
        });

        // each brand

        $query->whereHas('family', function ($query) use ($search) {
            if ($brands = $search->getBrands()) {
                for ($i = 0; $i < count($brands); $i++) {
                    if ($i < 1) {
                        $query->where('name', $brands[$i]);
                    } else {
                        $query->orWhere('name', $brands[$i]);
                    }
                }
            }

        });

        // each category

        $query->whereHas('category', function ($query) use ($search) {
            if ($categories = $search->getCategories()) {
                for ($i = 0; $i < count($categories); $i++) {
                    if ($i < 1) {
                        $query->where('name', $categories[$i]);
                    } else {
                        $query->orWhere('name', $categories[$i]);
                    }
                }
            }
        });

    }

}
