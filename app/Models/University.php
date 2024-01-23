<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $fillable=['country_id','specialty_id','sub_specialty_id','name','master','Bachelor','doctor','note'];


    ##---------- Relationships ----------##

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }

    public function sub_specialty()
    {
        return $this->belongsTo(SubSpecialty::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
