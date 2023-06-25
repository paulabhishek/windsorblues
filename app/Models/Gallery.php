<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes, HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function collection(){
        return $this->belongsTo(Collection::class);
    }
}
