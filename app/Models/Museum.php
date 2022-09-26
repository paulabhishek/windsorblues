<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Museum extends Model
{
    protected $fillable =["artist_name", "image1", "video_url1", "image2", "video_url2", "date", "user_id", "p1", "p2", "p3" ];

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
