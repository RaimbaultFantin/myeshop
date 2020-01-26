<?php

namespace App\Http\Entity;

use Illuminate\Http\Request;

class PropertySearch
{

    private $brands;
    private $sizes;
    private $categories;
    private $maxPrice;

    public function __construct(Request $request)
    {

        $this->brands = \preg_split('/[,]+/', $request->input('brands'));
        $this->sizes = \preg_split('/[,]+/', $request->input('sizes'));
        $this->categories = \preg_split('/[,]+/', $request->input('categories'));
        $this->maxPrice = $request->input('maxPrice');

    }

    public function getCategories()
    {
        if ($this->categories && !empty($this->categories[0])) {
            return $this->categories;
        }

        return null;
    }

    public function getBrands()
    {
        if ($this->brands && !empty($this->brands[0])) {
            return $this->brands;
        }

        return null;
    }

    public function getSizes()
    {
        if ($this->sizes && !empty($this->sizes[0])) {
            return $this->sizes;
        }

        return null;
    }

    public function getMaxPrice()
    {
        if ($this->maxPrice) {
            return $this->maxPrice;
        }

        return null;
    }
}
