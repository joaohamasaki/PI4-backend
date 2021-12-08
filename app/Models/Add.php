<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price'];

    public function rooms(){
        return $this->belongsToMany(Room::class);
    }
}

