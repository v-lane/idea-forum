<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    /** @use HasFactory<\Database\Factories\LikeFactory> */
    use HasFactory;

    // Relationships:
    // Like -> User 1:M
    public function user(){
        $this->belongsTo(User::class);
    }

    // Like -> Idea 1:M
    public function idea(){
        $this->belongsTo(Idea::class);
    }
}
