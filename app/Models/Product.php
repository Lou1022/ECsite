<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    protected $fillable = [
        'name',
        'price',
        'main_image',
        'description',
        'amount',
        'category_id',
    ];
    
    public function getByLimit(int $limit_count = 1)
    {
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    public function getPaginateByLimit(int $limit_count = 2)
    {
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
