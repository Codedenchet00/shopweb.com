<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
       // Truyền trường những data
    protected $fillable = [
        'product_name',
        'thumbnail',
        'product_slug',
        'description',
        'like',
        'view',
        'download_count',
        'url_download',
        'price',
        'price_sale',
        'status',
        'user_id',
        'category_id'
    ];
    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function user() 
    {
        return $this->belongsTo(Product::class);
    }
}
