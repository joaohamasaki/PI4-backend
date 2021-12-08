<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = ['name','description','price', 'published_at','category_id','image'];        

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function adds(){
        return $this->belongsToMany(Add::class);
    }

}
