<?php

namespace App\Filters;

use App\Models\Product;

class ProductFilter extends QueryFilter
{
    public function property($props = [])
    {
        $products = $this->builder->with('properties')->whereHas('properties', function($query) use($props){
            foreach ($props as $propId=>$propValues) {
                $query->where('product_property.property_id', $propId)->whereIn('value', $propValues);
            }
        })
        ->get();
        return $products;
    }
}
