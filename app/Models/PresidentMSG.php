<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PresidentMSG extends Model
{
    use HasFactory;
    protected $fillable =[ "date", "message"];

    public function presidentMSG(){
        return $this->belongsTo(User::class);
    }

}
