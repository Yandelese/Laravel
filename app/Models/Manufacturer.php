<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function get_distributors(){
        return $this->hasMany(Distributor::class,'manufacturer_id','id');
    }

    public function get_weaknesses(){
        return $this->belongsToMany(Weaknesses::class,'brands_weaknesses', 'brands_id','weakness_id');
    }
}
