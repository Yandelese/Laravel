<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weaknesses extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function get_manufactures(){
        return $this->belongsToMany(Manufacturer::class,'brands_weaknesses','weakness_id','brands_id');
    }
}
