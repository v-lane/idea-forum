<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    /** @use HasFactory<\Database\Factories\IdeaFactory> */
    use HasFactory;

    // Relationships:
    // Idea -> User M:1
    public function user(){
        return $this->belongsTo(User::class);
    }

    // Idea -> Like 1:M
    public function likes(){
        return $this->hasMany(Like::class);
    }

    // Idea -> Comment 1:M
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
