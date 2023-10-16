<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Sluggable;
    protected $table = "product";
    protected $fillable = [
        "name",
        "slug",
        "image",
        "description",
        "price",
        "stock",
        "category_id"
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name' // Change 'title' to the actual product title field
            ]
        ];
    }
}
