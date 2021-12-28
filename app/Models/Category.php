<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    // Truyền trường những data
    protected $fillable = [
        'category_name',
        'thumbnail',
        'parent_id',
        'category_description',
        'category_slug',
        'category_status',
        'user_id',    
    ];

    public function product() {
        return $this->hasMany(Product::class);
    }


}
