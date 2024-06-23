<?php

namespace App\Filters;

class ProductFilter extends QueryFilter
{
    public function property($props = [])
    {

            $query = $this->builder->with('properties');

            foreach ($props as $propId => $propValues) {
                $query->whereHas('properties', function($query) use($propId, $propValues){
                    $query->where('product_property.property_id', $propId)->whereIn('value', $propValues);
                });
            }

            $products = $query->get();
            return $products;
    }
}
