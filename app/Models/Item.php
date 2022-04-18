<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        "Nom","Description","Type",'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}