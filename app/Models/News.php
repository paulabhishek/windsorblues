<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable =["title", "date", "img_banner", "author"];
    use HasFactory;

    public function news(){
        return $this->belongsTo(User::class);
    }
}
