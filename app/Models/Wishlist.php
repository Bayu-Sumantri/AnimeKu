<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AnimeKu;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlist extends Model
{
    use HasFactory;

        protected $table="wishlist";
        public function animeku(): BelongsTo
        {
            return $this->belongsTo(AnimeKu::class, 'anime_id');
        }
        
    protected $fillable = [
        "user_id",
        "anime_id",
    ];



}