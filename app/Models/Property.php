<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public function productProperties():HasMany
    {
        return $this->hasMany(ProductProperty::class);
    }
}
