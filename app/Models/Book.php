<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'description', 'published_at'];


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_category');
    }
    
    public function subcategories()
    {
        return $this->belongsToMany(Subcategory::class, 'book_subcategory');
    }
}
