<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable =["name", "email", "phone", "newsletter"];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
