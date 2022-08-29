<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable =["title", "date", "img_banner", "author", "p1", "p2", "p3", "p4", "p5", "img_highlight1", "img_highlight2", "img_highlight3", "img_highlight4", "img_highlight5"];
    use HasFactory;

    public function news(){
        return $this->belongsTo(User::class);
    }
}
