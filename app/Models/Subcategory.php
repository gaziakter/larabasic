<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id'];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_subcategory');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}