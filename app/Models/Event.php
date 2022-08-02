<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable =["name", "description", "location", "artist", "yt_url", "date", "user_id" ];

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
