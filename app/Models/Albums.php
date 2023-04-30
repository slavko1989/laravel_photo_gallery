<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    use HasFactory;
    protected $fillable =['id',' album_name'];

     public function images(){
        return $this->hasMany(Images::class,'album_id','id');
    }
}
