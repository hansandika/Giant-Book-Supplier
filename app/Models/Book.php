<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'publisher_id', 'year', 'image', 'synopsis'];


    public function getImageAttribute()
    {
        return asset('storage/books/' . $this->attributes['image']);
    }

    public function publisher()
    {
        return $this->BelongsTo(Publisher::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
