<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSpecialty extends Model
{
    use HasFactory;
    protected $fillable=['specialty_id','name'];

    ##---------- Relationships ----------##

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }
}
