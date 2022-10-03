<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class days extends Model
{
    use HasFactory;

    public function films()
    {
        return $this->belongsToMany(Films::class, 'workhours','day_id','film_id')->withPivot('start_time','end_time');
    }
}
