<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Post extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    // relasi antara tabel post dan tabel category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // relasi antara tabel post dan tabel tag
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->format('d- M - Y'),
        );
    }
}
