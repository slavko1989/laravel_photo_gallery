<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Albums;

class Images extends Model
{
    use HasFactory;
    protected $fillable =['id','image_name','album_id','photo'];

    public function albums(){
        return $this->belongsTo(Albums::class,'album_id','id');
    }
}
