<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model implements TranslatableContract
{
    use HasFactory, \Astrotomic\Translatable\Translatable;

    protected $fillable = ['image'];

    public $translatedAttributes = ['title'];
}
