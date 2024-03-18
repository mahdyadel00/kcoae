<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchUniversity extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'order_id',
        'country_id',
        'specialty_id',
        'sub_specialty_id',
        'name',
        'master',
        'Bachelor',
        'doctor',
        'note',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }

    public function sub_specialty()
    {
        return $this->belongsTo(SubSpecialty::class);
    }

    public function universities()
    {
        return $this->hasMany(University::class);
    }
}
