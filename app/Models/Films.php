<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = ['titre', 'resume', 'duree', 'date', 'image',  'realisateur'];
    protected $primaryKey = 'id_film';



}
