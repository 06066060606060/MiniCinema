<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Films;

class Categories extends Model
{
    use HasFactory;


    public function films()
    {
       return $this->belongsToMany(Film::class);
    }


}
