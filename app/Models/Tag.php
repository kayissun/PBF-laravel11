<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    // relasi many to many antara tabel tag dan tabel post
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
