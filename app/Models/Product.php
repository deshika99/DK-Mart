<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'product_name',
        'product_description',
        'category_id',
        'subcategory_id', 
        'sub_subcategory_id', 
        'quantity',
        'tags',
        'normal_price',
        'is_affiliate',
        'affiliate_price',
        'commission_percentage',
        'total_price',
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'product_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id'); 
    }

    public function subSubcategory()
    {
        return $this->belongsTo(SubSubcategory::class, 'sub_subcategory_id'); 
    }
}


