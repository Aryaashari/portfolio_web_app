<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;


    // Relation with post table
    public function post() {
        return $this->belongsTo(Post::class);
    }

    // Relation with replies table
    public function reply() {
        return $this->hasMany(Reply::class);
    }
}
