<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class films_categories extends Model
{
    use HasFactory;

    public function categories()
    {
      // return $this->belongsTo(Categories::class, 'id_categorie');
       return $this->belongsToMany(Categories::class, 'films_categories', 'film_id', 'id_categorie');
    }
}
