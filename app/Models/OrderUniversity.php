<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderUniversity extends Model
{
    use HasFactory;
    protected $fillable = [
        'country_id',
        'specialty_id',
        'sub_specialty_id',
        'name',
        'master',
        'Bachelor',
        'doctor',
        'note',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }

    public function subSpecialty()
    {
        return $this->belongsTo(SubSpecialty::class);
    }

    public function universities()
    {
        return $this->hasMany(University::class);
    }
}
