<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    // Relation to post
    public function post() {
        return $this->hasOne(Post::class);
    }
}
