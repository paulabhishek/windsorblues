<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    protected $fillable =["name", "email", "phone", "newsletter", "terms", "date"];
    use HasFactory, SoftDeletes;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
