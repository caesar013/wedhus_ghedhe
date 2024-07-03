<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sheep extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function farm()
    {
        return $this->belongsTo(Farm::class, 'farm_id', 'id');
    }

    public function breed()
    {
        return $this->belongsTo(Breed::class, 'breed_id', 'id');
    }

    public function sheepTreatments()
    {
        return $this->hasMany(SheepTreatment::class, 'sheep_id', 'id');
    }

    public function sheepCares()
    {
        return $this->hasMany(SheepCare::class, 'sheep_id', 'id');
    }
}
