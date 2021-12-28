<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    // Truyền trường những data
    protected $fillable = [
        'role_name',
        'status',
    ];


    public function user() 
    {
        return $this->belongsTo(Product::class);
    }
}
