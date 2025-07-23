<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    // Relationships:
    // Comment -> User 1:M
    public function user(){
        $this->belongsTo(User::class);
    }

    // Comment -> Idea 1:M
    public function idea(){
        $this->belongsTo(Idea::class);
    }
}
