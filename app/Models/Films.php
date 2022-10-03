<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Films extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $primaryKey = 'id_film';
    protected $fillable = ['titre', 'resume', 'duree', 'date', 'image',  'realisateur'];

    public function categories()
    {
       return $this->belongsToMany(Categories::class, 'film_categorie', 'film_id', 'categorie_id');
    }

    public function days()
    {
        return $this->belongsToMany(days::class, 'workhours','start_time', 'end_time');
    }

}
