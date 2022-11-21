<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'phone', 'email', 'image'];

    public function getImageAttribute()
    {
        return asset('storage/publishers/' . $this->attributes['image']);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
